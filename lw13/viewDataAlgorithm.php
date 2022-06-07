<?php
require_once("./src/common.inc.php");
$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage("./data/");

$survey = $requestSurveyLoader->load();
$user = $surveyFileStorage->getSurveyFromFile($survey->getEmail());
if (SurveyPrinter::checkEmail($user->getEmail()))
{
    SurveyPrinter::printData($user);
}
else
{
    echo "<p>Данного файла не существует</p>";
}