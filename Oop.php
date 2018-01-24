<?php

/**
*  Oop Questions
*/
class ClassName
{
	public function What is Object Oriented Programming()
	{
		$a = array(
			"1" => "oop is Programming paradiam",
			"2" => "completed software operates as a bunch of objects talking to each other"
			"3" => "An Object is a collection of data and methods that operate on its data"
		);
	}

	public function Why oop()
	{
		"1" => "better manageable",
		"2" => "The overall understanding of the software is increased as the distance between the language spoken by developers and that spoken by users",
		"3" => "Object orientation eases maintenance by the use of encapsulation.   One can easily change the underlying representation by keeping the methods same."
	}

	public function What are main features of OOP()
	{
		"1" => "encapsulation",
		"2" => "polymorphism",
		"3" => "inheritance"
	}

	public function what is encapsulation()
	{
		"1" => "Data hiding: A language feature to restrict access to members of an object. For example, private and protected members in C++.",
		"2" => "Bundling of data and methods together: Data and methods that operate on that data are bundled together."
	}

	public function what is polymorphism and how is supported by java()
	{
		"1" => "Polymorphism means that some code or operations or objects behave differently in different contexts. In C++,  following features support polymorphism."
	}

	public function what are _public _private _protected in object oriented programming()
	{
		"1" => "They are access modifiers and help us implement encapsulation (or information hiding). They tell the compiler which order classes should have access to the field or method being defined",
		"2" => "private - Only the current class will have access to the field or method",
		"3" => "protected - Only the current class and subclasses (and sometimes also same package classes like in Java)"
		"4" => "public - Any class can refer to the field or call the method"
		"5" => "This assumes these keywords are used as part of a field or method declaration within a class definition"
	}

	public function what is Inheritance and what is the purpose ()
	{
		"1" => "The Idea of inheritance is simple, a class is based on another class and uses data and implementation of the other class"
		"2" => "The Purpose of inheritance is Code Reuse"
	}

	public function what is Abstraction()
	{
		"1" => "The first thing with which one is confronted when writing programs is the problem. Typically we are confronted with “real-life” problems and we want to make life easier by providing a program for the problem. However, real-life problems are nebulous and the first thing we have to do is to try to understand the problem to separate necessary from unnecessary details: We try to obtain our own abstract view, or model, of the problem. This process of modeling is called abstraction"
	}

	function What is a class()
	{
		"1" => "A class is simply a representation of a type of object. It is the blueprint/ plan/ template that describe the details of an object."
	}

	function what is an object()
	{
		"1" => "Object is termed as an instance of a class, and it has its own state, behavior and identity."
	}

	function define a constructor()
	{
		"1" => "Constructor is a method used to initialize the state of an object, and it gets invoked at the time of object creation. Rules forconstructor are:"
		"2" => "Constructor Name should be same asclass name."
		"3" => "Constructor must have no return type."
	}

	function define a destructor()
	{
		"1" => "Destructor is a method which is automatically called when the object ismade ofscope or destroyed. Destructor name is also same asclass name but with the tilde symbol before the name."
	}

	function what is an abstract class()
	{
		"1" => "An abstract class is a class which cannot be instantiated. Creation of an object is not possible with an abstract class, but it can be inherited. An abstract class can contain only Abstract method. Java allows only abstract method in abstract class while for other languages it allows non-abstract method as well."
	}

	function what is different between interface and abstract class()
	{
		"1" => "An interface is a contract, and An interface is an empty shell. There are only the signatures of the methods, which implies that the methods do not have a body. The interface can't do anything. It's just a pattern."

		"2" => "Abstract classes, unlike interfaces, are classes. They are more expensive to use, because there is a look-up to do when you inherit from them.Abstract classes look a lot like interfaces, but they have something more: You can define a behavior for them"
	}
}