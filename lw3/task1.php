<?php
  $tempString = $_SEVER('QUERY_STRING');
  echo str_replace('$20', ' ', $tempString);