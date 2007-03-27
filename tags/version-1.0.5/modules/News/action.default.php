<?php

if (!isset($gCms)) exit;

		$detailpage = '';
		if (isset($params['detailpage']))
		{
			$manager =& $gCms->GetHierarchyManager();
			$node =& $manager->sureGetNodeByAlias($params['detailpage']);
			if (isset($node))
			{
				$content =& $node->GetContent();	
				if (isset($content))
				{
					$detailpage = $content->Id();
				}
			}
			else
			{
				$node =& $manager->sureGetNodeById($params['detailpage']);
				if (isset($node))
				{
					$detailpage = $params['detailpage'];
				}
			}
		}
		if (isset($params['browsecat']) && $params['browsecat']==1)
		{
			$params['detailpage'] = $detailpage;
			$this->DoAction('browsecat', $id, $params, $returnid);
			return;
		}

		if (isset($params["makerssbutton"]))
		{
			$params["showtemplate"] = "false";
			echo $this->CreateLink($id, 'rss', $returnid, "<img border=\"0\" src=\"images/cms/xml_rss.gif\" alt=\"RSS Newsfeed\" />", $params,'',false,false,'',true,'news/rss');
			return;
		}

		$entryarray = array();
		$query = "
            SELECT 
                mn.*, 
                mnc.news_category_name, 
                mnc.long_name, 
                u.username, 
                u.first_name,
                u.last_name 
            FROM " . 
                cms_db_prefix() . "module_news mn
            LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc 
            ON mnc.news_category_id = mn.news_category_id 
            LEFT OUTER JOIN " . cms_db_prefix() . "users u 
            ON u.user_id = mn.author_id 
            WHERE 
                status = 'published' 
            AND
        ";

		if (isset($params["category"]) && $params["category"] != '')
		{
			$categories = explode(',', $params['category']);
            $query .= "(";
			$count = 0;
			foreach ($categories as $onecat)
			{
				if ($count > 0)
				{
					$query .= ' OR ';
				}
				if (strpos($onecat, '|') !== FALSE || strpos($onecat, '*') !== FALSE)
					$query .= "upper(mnc.long_name) like upper('" . trim(str_replace('*', '%', $onecat)) . "')";
				else
					$query .= "mnc.news_category_name = '" . trim($onecat) . "'";
				$count++;
			}
			$query .= ") AND ";
		}

		$query .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < ".$db->DBTimeStamp(time()).") ";
        if (isset($params['showarchive']) && $params['showarchive'] == true) {
            $query .= " AND (end_time < ".$db->DBTimeStamp(time()).") ";
        }
        else
        {
            $query .= " AND ((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > ".$db->DBTimeStamp(time()).")) ";
        }


        
		if (isset($params['sortby'])) 
		{
			if ($params['sortby'] == 'news_category')
			{
			    $query .= "ORDER BY 'long_name', 'news_date'";
			} else {
    			    $query .= "ORDER BY '" . str_replace("'", '', str_replace(';', '', $params['sortby'])) . "' ";
			}
		} 
		else 
		{ 
			$query .= "ORDER BY news_date "; 
		} 

		if (isset($params['sortasc']) && ($params['sortasc'] == true || strtolower($params['sortasc']) == 'true')) 
		{ 
			$query .= "asc"; 
		} 
		else 
		{ 
			$query .= "desc"; 
		}
		
		$dbresult = '';

		$number = -1;
		$start = -1;

		if( isset( $params['start'] ) )
		{
			$start = $params['start'];
			$number = 100000; //SelectLimit doesn't like -1
		}

		if( isset( $params['number'] ) )
		{
			$number = $params['number'];
		}

		if( $start >= 0 || $number >= 0 )
		{
			$dbresult =& $db->SelectLimit($query, $number, $start);
		}
		else
		{
			$dbresult =& $db->Execute($query);
		}

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$onerow->author_id = $row['author_id'];
			$onerow->author = $row['username'];
			$onerow->authorname = $row['first_name'].' '.$row['last_name'];
			$onerow->id = $row['news_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = (trim($row['summary'])!='<br/>'?$row['summary']:'');
			$onerow->postdate = $row['news_date'];
			$pref_dateformat = $this->GetPreference('dateformat', '');
			if (FALSE == empty($params['dateformat']))
			{
				$dateformat = $params['dateformat'];
			} elseif (FALSE == empty($pref_dateformat)) {
				$dateformat = $this->GetPreference('dateformat', '');
			} else {
				$dateformat = '%x';
			}
			$onerow->formatpostdate = strftime($dateformat, $db->UnixTimeStamp($row['news_date']));
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			$moretext = isset($params['moretext'])?$params['moretext']:$this->Lang('more');
			$sendtodetail = array('articleid'=>$row['news_id']);
			if (isset($params['detailpage']))
			{
				$sendtodetail['origid'] = $returnid;
			}
			if (isset($params['detailtemplate']))
			{
				$sendtodetail['detailtemplate'] = $params['detailtemplate'];
			}
			if (isset($params['dateformat']))
			{
				$sendtodetail['dateformat'] = $params['dateformat'];
			}
			
			$prettyurl = 'news/'.$row['news_id'].'/'.($detailpage!=''?$detailpage:$returnid);
			if (isset($sendtodetail['detailtemplate']))
			{
				$prettyurl .= '/d,' . $sendtodetail['detailtemplate'];
			}
			
			$sendtoprint = array('articleid' => $row['news_id'], 'showtemplate' => 'false');
			
			if (isset($params['lang']))
			{
				$sendtodetail['lang'] = $params['lang'];
				$sendtoprint['lang'] = $params['lang'];
			}

			#CreateLink($id, $action, $returnid='', $contents='', $params=array(), $warn_message='', $onlyhref=false, $inline=false, $addttext='', $targetcontentonly=false, $prettyurl='')
			$onerow->link = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, '', $sendtodetail,'', true, false, '', true, $prettyurl);
			$onerow->titlelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $row['news_title'], $sendtodetail, '', false, false, '', true, $prettyurl);
			$onerow->morelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $moretext, $sendtodetail, '', false, false, '', true, $prettyurl);
			$onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);

			$entryarray[]= $onerow;
		}
		$smarty->assign('itemcount', count($entryarray));
                $smarty->assign_by_ref('items', $entryarray);
                $smarty->assign('category_label', $this->Lang('category_label'));
		$smarty->assign('author_label', $this->Lang('author_label'));

foreach( $params as $key => $value )
{
  if( $key == 'mact' || $key == 'action' ) continue;

  $smarty->assign('param_'.$key,$value);
}

                #Display template
		echo "<!-- Displaying News Module -->\n";
		echo "<!-- News Categories: '".(isset($params['category'])?$params['category']:'')."' -->\n";

		if (isset($params['summarytemplate']))
		{
			echo $this->ProcessTemplate($params['summarytemplate']);
		}
		else
		{
			echo $this->ProcessTemplateFromDatabase('displaysummary');
		}

# vim:ts=4 sw=4 noet
?>
