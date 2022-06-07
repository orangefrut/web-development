<?php
class RequestSurveyLoader
{
    public function load(): Survey
    {
        header('Content-type: application/json');

        $objJSON = file_get_contents('php://input');
        $request = json_decode($objJSON, true);

        $email = $request['email'];
        $name = $request['name'];
        $activity = $request['activity'];
        $agreement = $request['agreement'];

        
        return new Survey($email, $name, $activity, $agreement);
    }
}