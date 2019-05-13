<?php
    $title = "Home - Legion Servers Gaming Community";
    // logo.png
    //  popup notification located in js/notifications.js
    $options = array(
        array('value' => 'Game', 'position' => 'center'),
        array('value' => 'Server Name', 'position' => 'center'),
        array('value' => 'Map', 'position' => 'default'),
        array('value' => 'Players', 'position' => 'default'),
        array('value' => 'IP:Port', 'position' => 'default'),
        array('value' => 'Status', 'position' => 'default')
    );
    $trans = [];
    $trans["nav"]["brand"] = "Legion Servers Official";
    $trans["nav"]["home"] = "Home";
    $trans["nav"]["servers"] = "Servers";
    $trans["nav"]["shop"] = "Join The Legion League";
    $trans["nav"]["discord"] = "Discord";
    $trans["nav"]["forums"] = "Forums";
    // img/logo.png 
    // img/header.png 
    $trans["header"]["title"] = "Welcome to Legion Servers Gaming Community";
    $trans["header"]["description"] = "Your favourite role-playing game servers!";
    // heath mate set up the servers
    $trans["servers"]["heading"] = "Servers";
    $trans["servers"]["description"] = "Below are listed our current game servers.";
    $trans["shop"]["heading"] = "Join The Legion League";
    $trans["shop"]["description"] = "If you feel that we have done a great job and you enjoy playing on our servers, you can support us by purchasing ranks in our store.";
    
    $shops = array (
        array("URL"=>"https://legionserverscommunity.com/store", "Text"=>"Buy Unturned Ranks")
    );
    
    $trans["discord"]["heading"] = "Discord";
    $trans["discord"]["description"] = "Announcements, Events, News, Guides, Giveaways & More will be posted on our Discord Servers!";
    $discords = array (
        array("URL"=>"https://discord.gg/3DsjAe5", "Image"=>"/img/discord.png")
    );
	
	$trans["forums"]["heading"] = "Forums";
    $trans["forums"]["description"] = "Stay connected. Have a suggestion? Looking for our applications? Want to report a player? Join our Forums.";
    $forums = array (
        array("URL"=>"http://legionserverscommunity.epizy.com/forums", "Image"=>"/img/forums.png")
    );
    $trans["footer"]["copyright"] = "Copyright &copy; http://legionserverscommunity.epizy.com 2019";
    $trans["footer"]["credits"] = "Website made by <a target='_blank' href='http://steamcommunity.com/profiles/id/meedicbear'>Meedic Bear</a>";
?>