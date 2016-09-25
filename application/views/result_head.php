<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Result - Hospital Ranker</title>
	<link rel="icon" href="/static/img/favicon.png" type="image/x-icon" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
	<style>
	body {
		margin-bottom: 50px;
	}
	.detail-btn {
		cursor: pointer;
	}
	.bg-warning {
		text-align: center;
		height: 30px;
		line-height: 30px;
		color: red;
	}
	.bg-primary {
		text-align: center;
		height: 50px;
		line-height: 50px;
		color: white;
	}
	thead {
		background: #999;
	}
	.back {
		cursor: pointer;
		position: fixed;
		width: 100%;
		bottom: 0px;
	}
	</style>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="/static/js/layer/layer.js"></script>
</head>
<body>
<div class="bg-warning" style="display: <?php echo $range_exceed;?>"><?php echo $range_exceed_hint;?></div>
<div id="table-container">
<table class="table table-striped table-bordered table-hover">
<thead>
	<tr>
	  <th>#</th>
	  <th>Hospital Name</th>
	  <th>State</th>
	  <th><?php echo $item;?></th>
	  <th>Detail</th>
	</tr>
</thead>
<tbody id="tbody">