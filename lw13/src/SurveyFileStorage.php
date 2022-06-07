<?php

class SurveyFileStorage
{
	private string $pathToDirectory;

	public function __construct(string $pathToDirectory)
	{
		$this->pathToDirectory = $pathToDirectory;
	}

	public function saveSurveyToFile(Survey $survey): array
	{
		$pathFile = $this->createPathFile($survey->getEmail());
		if (!is_writable("./data/"))
		{ 
			return ['status' => 500, 'message' => "access denied"];
		}
		
		if ($survey->getEmail() || $survey->getEmail() === '')
		{
			if (file_exists($pathFile))
			{
				$arrayData = file($pathFile);
				$surveyInFile = $this->getSurveyFromFile($survey->getEmail());
				if ($survey->getFirstName() !== $surveyInFile->getFirstName())
				{
					$arrayData[0] = "Ваше имя " . $survey->getFirstName() . PHP_EOL;
				}
				if ($survey->getEmail() !== $surveyInFile->getEmail())
				{
					$arrayData[1] = "Email " . $survey->getEmail() . PHP_EOL;
				}
				if ($survey->getActivity() !== $surveyInFile->getActivity())
				{
					$arrayData[2] = "Деятельность " . $survey->getActivity(). PHP_EOL;
				}
				if ($survey->getAgreement() !== $surveyInFile->getAgreement())
				{
					$arrayData[3] = "Согласие на рассылку " . $survey->getAgreement();
				}
				file_put_contents($pathFile, $arrayData);
				return ['status' => 200, 'message' => 'User data updated (overwritten)'];
			}
			else
			{
				$fp = fopen($pathFile, "w");
				fwrite($fp, "Ваше имя: " . $survey->getFirstName() . PHP_EOL);
				fwrite($fp, "Email: " . $survey->getEmail() . PHP_EOL);
				fwrite($fp, "Деятельность: " . $survey->getActivity() . PHP_EOL);
				fwrite($fp, "Согласие на рассылку: " . $survey->getAgreement() . PHP_EOL);
				fclose($fp);
				return ['status' => 200, 'message' => 'User data saved'];
			}
		}
        return ['status' => 500, 'message' => "наши полномочия всё"];
	}

	public function getSurveyFromFile($email): Survey
	{
		$pathFile = $this->createPathFile($email);
		$array = [];
		if (file_exists($pathFile) and ($email !== null) and ($email !== ''))
		{
			$arrayData = file($pathFile);
			foreach ($arrayData as $item) 
			{
				$temporaryString = explode(": ", $item);
				$array[$temporaryString[0]] = $temporaryString[1] ?? null;
			}
			return new Survey($array["Email"], $array["Ваше имя"], $array["Деятельность"], $array["Согласие на рассылку"]);
		}
		else
		{
			return new Survey("none", "none", "none", "none");
		}
	}

	private function createPathFile(string $email): string
	{
		return $this->pathToDirectory . $email . ".txt";
	}
}