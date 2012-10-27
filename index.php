<?php
function is_chrome()
{
	return(eregi("chrome", $_SERVER['HTTP_USER_AGENT']) OR eregi("safari", $_SERVER['HTTP_USER_AGENT']));
}
?> 

<!doctype html>
<html>
	<head>
		<title>Flex Mail</title>
		<meta charset="utf-8" />
		
		<link rel="stylesheet/less" type="text/css" href="less/layout.less">
		<script type="text/javascript" src="libraries/less/dist/less-1.3.1.min.js"></script>
		<script type="text/javascript" src="js/mootools.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>
		
	<body class="<?php if(is_chrome()) : ?>chrome<?php endif ?>">
		<div id="menu">
			<ul>
				<li><a class="active" href="#">Mail</a></li>
				<li><a href="#">Calendar</a></li>
				<li><a href="#">Documents</a></li>
			</ul>
		</div>
		<div id="header">
			<input type="text" name="search" />
			<a role="button" class="blue" href="#">Search mail and docs</a>
			<a role="button" href="#">Search the web</a>
		</div>
		<div id="frame">
			<div id="sidebar">
				<ul>
					<li><a class="active" href="#">Mail</a></li>
					<li><a href="#">Contacts</a></li>
					<li><a href="#">Tasks</a></li>
				</ul>
				<ul>
					<li><a class="active" href="#">Priority Inbox</a></li>
					<li><a href="#">Inbox</a></li>
					<li><a href="#">Starred</a></li>
					<li><a href="#">Important</a></li>
					<li><a href="#">Chats</a></li>
					<li><a href="#">Sent Mail</a></li>
					<li><a href="#">Drafts</a></li>
					<li><a href="#">All Mail</a></li>
					<li><a href="#">Spam</a></li>
					<li><a href="#">Trash</a></li>
				</ul>
				<ul>
					<li><a href="#">Cars</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#">Marketing</a></li>
					<li><a href="#">Misc</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">More</a></li>
				</ul>
			</div>
			<div id="content">
				<div id="toolbar">
					<ul>
						<li><a role="button" href="#">Archive</a></li>
						<li><a role="button" href="#">Spam</a></li>
						<li><a role="button" href="#">Delete</a></li>
						<li><a role="button" href="#">Mark as read</a></li>
						<li class="divider"></li>
						<li><a role="button" href="#">Move to</a></li>
						<li><a role="button" href="#">Labels</a></li>
					</ul>
				</div>
				<div id="table">
					<div class="inner">
						<table cellpadding="0">
							<thead>
								<tr>
									<th width="25"></th>
									<th width="40"></th>
									<th width="180"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							<?php for ($i = 0; $i < 25 ; $i++) : ?>
								<tr>
									<td align="center"><input type="checkbox" name="" value="" /></td>
									<td></td>
									<td>From me</td>
									<td>This is an email</td>
								</tr>
							<?php endfor; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>