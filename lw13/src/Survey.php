<?php
class Survey 
{
	private ?string $firstName; 
	private string $email;
	private ?string $activity;
	private string $agreement;

    public function __construct(string $email, ?string $firstName, ?string $activity, string $agreement)
	{
        $this->firstName = $firstName;
        $this->email = $email;
        $this->activity = $activity;			
		$this->agreement = $agreement;
	}
	
	public function getFirstName(): ?string
	{
 		return $this->firstName;
	}

	public function getEmail(): string
	{
 		return $this->email;
	}

	public function getActivity(): ?string
	{
 		return $this->activity;
	}
	
	public function getAgreement(): string
	{
 		return $this->agreement;
	}	
}