<?php
	namespace StanfordTagger;
	
	include 'vendor/autoload.php';

	$pos = new \StanfordTagger\POSTagger();

	// 设置英文目录，可设置相对目录
	// $pos->setModel('/usr/local/var/www/stanford-nlp-tagger/stanford-postagger-2018-10-16/models/english-bidirectional-distsim.tagger');

	// 设置中文目录，可设置相对目录
	$pos->setModel('/usr/local/var/www/stanford-nlp-tagger/stanford-postagger-full-2018-10-16/models/chinese-distsim.tagger');

	// 设置stanford-postagger目录，可设置相对目录
	$pos->setJarArchive('/usr/local/var/www/stanford-nlp-tagger/stanford-postagger-2018-10-16/stanford-postagger.jar');

	// 设置输出数据格式，有OUTPUT_FORMAT_TSV、OUTPUT_FORMAT_SLASH_TAGS、OUTPUT_FORMAT_XML、OUTPUT_FORMAT_INLINE_XML
	$pos->setOutputFormat(StanfordTagger::OUTPUT_FORMAT_SLASH_TAGS);
	
	// 英文字符串
	// $res=$pos->tag('PHP wrapper for the Stanford Natural Language Processing library. Supports POSTagger and CRFClassifier');

	// 中文字符串，要处理成空格间隔
	$res=$pos->tag('中 国 载 人 航 天 工 程 走 过 了 30 年');
	
	// 格式化为数组
	$resArr=explode(' ', $res);

	print_r($resArr);
	// print_r($resArr);

	/*
	Array
	(
	    [0] => PHP_NN
	    [1] => wrapper_NN
	    [2] => for_IN
	    [3] => the_DT
	    [4] => Stanford_NNP
	    [5] => Natural_NNP
	    [6] => Language_NNP
	    [7] => Processing_NNP
	    [8] => library_NN
	    [9] => ._.
	Supports_VBZ
	    [10] => POSTagger_NN
	    [11] => and_CC
	    [12] => CRFClassifier_NN
	)

	Array
	(
	    [0] => 中_JJ
	    [1] => 国_NN
	    [2] => 载_VV
	    [3] => 人_NN
	    [4] => 航_NN
	    [5] => 天_NN
	    [6] => 工_NN
	    [7] => 程_NN
	    [8] => 走_VV
	    [9] => 过_VV
	    [10] => 了_AS
	    [11] => 30_CD
	    [12] => 年_M
	)
	*/


?>