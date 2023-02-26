## stanford-nlp-tagger-php

fork:https://github.com/patrickschur/stanford-nlp-tagger

## 斯坦福大学多语言词性标注器-php版本

该词性标注器，可识别多语言的词性，本demo只实例化英文版本

## 代码部分

```php

<?php
  namespace StanfordTagger;
  
  include 'vendor/autoload.php';

  $pos = new \StanfordTagger\POSTagger();

  // 设置英文目录，可设置相对目录
  $pos->setModel('/usr/local/var/www/cixing/stanford-postagger-2018-10-16/models/english-bidirectional-distsim.tagger');

  // 设置stanford-postagger目录，可设置相对目录
  $pos->setJarArchive('/usr/local/var/www/cixing/stanford-postagger-2018-10-16/stanford-postagger.jar');
  $pos->setOutputFormat(StanfordTagger::OUTPUT_FORMAT_SLASH_TAGS);
  $res=$pos->tag('PHP wrapper for the Stanford Natural Language Processing library. Supports POSTagger and CRFClassifier');
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
  */


?>

```
