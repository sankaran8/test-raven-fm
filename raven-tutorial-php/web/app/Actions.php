<?php

class Actions
{
	
 	public static function getContract(array $data): array
 	{
 		switch ($data['action']) {
 			case 'add-two-numbers':
 				return [
					'action' => [
						'name' => 'add-two-numbers',
			            'version' => '1.0.0',
			            'namespace'	=> 'tutorial',
					],		
					'number_one' => $data['number_one'],
					'number_two' => $data['number_two'],
				];
 				break;
 			
 			default:
 				return [];
 				break;
 		}
 	}

}
