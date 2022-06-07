<?php
require_once("./src/common.inc.php");

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage("./data/");
$survey = $requestSurveyLoader->load();

echo json_encode($surveyFileStorage->saveSurveyToFile($survey));