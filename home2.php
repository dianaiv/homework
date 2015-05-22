<?php
class Learner{
		public $name;
		public $averageGrade;		
		public $school;
		
		

		public function __construct($n,$a,$sc){
		$this->name = $n;
		$this->averageGrade = $a;
		
		$this->school=$sc;
	}
	
	public function learning($hoursL){
		echo "A Learner learns $hoursL hours weekly. <br/>";
	}
	public function goingToSchool($when){
		echo "A Learner going to school at $when o'clock morning. <br/>";
	}
}	
	
class Schoolboy extends Learner{
	public $class1;
	public $classNumber;
	public static $numbSchoolboy= 30;
	public static $numbChild= 15;
	
	
	public function __construct($n,$a,$sc,$c,$cN){
	parent::__construct($n, $a, $sc);
	$this->class1=$c;
	$this->classNumber=$cN;
	}
	public function trainingForClassexam($hoursT){
		echo "A Schoolboy trains for class exam $hoursT hours dayly. <br/>";
	}
}
class Student extends Learner{
	public $specialty;
	public $facultyNumber;
	public static $numbStudent = 20;
	
	public static $numbEmployee= 10;
	public static $numbPensioner= 5;
	
	public function __construct($n,$a,$sc,$s,$fN){
	parent::__construct($n, $a, $sc);
	$this->specialty=$s;
	$this->facultyNumber=$fN;
	}
	public function trainingForExam($hoursT1){
		echo "A Student trains for exam $hoursT1 hours dayly. <br/>";
	}
}
	echo "There are ". Schoolboy::$numbSchoolboy ." schoolboys and" .Student::$numbStudent." students in the learners.<br/>";
	echo "There are ". Schoolboy::$numbChild ." children , ".Student::$numbEmployee. "employees ," .Student::$numbPensioner."pensioners.<br/>";

$learner1 = new Learner();
echo $learner1->learning(40);
echo $learner1->goingToSchool(8);	

$schoolboy1 = new Schoolboy ();
echo $schoolboy1->trainingForClassexam(5);

$student1 = new Student();
echo $student1->trainingForExam(8);
?>
?>