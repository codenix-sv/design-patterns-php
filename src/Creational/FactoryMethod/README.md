# Factory Method pattern in PHP

In class-based programming, the factory method pattern is a creational pattern that uses factory methods to deal with 
the problem of creating objects without having to specify the exact class of the object that will be created. This is 
done by creating objects by calling a factory method—either specified in an interface and implemented by child classes, 
or implemented in a base class and optionally overridden by derived classes—rather than by calling a constructor.

The Factory Method design pattern is used instead of the regular class constructor for keeping within the SOLID 
principle of programming, decoupling the construction of objects from the objects themselves. This has the following 
advantages and is useful for the following cases, among others:

- Allows construction of classes with a component of a type that has not been predetermined, but only defined in an "interface", or which is defined as a dynamic type.
- Allows construction of subclasses to a parent whose component type has not been predetermined, but only defined in an interface, or which is defined as a dynamic type.
- Allows for more readable code in cases where multiple constructors exist, each for a different reason.
- Allows a class to defer instantiation to subclasses, and to prevent direct instantiation of an object of the parent class type.

Creating an object directly within the class that requires or uses the object is inflexible because it commits the class
 to a particular object and makes it impossible to change the instantiation independently of the class. A change to the 
 instantiator would require a change to the class code which we would rather not touch. This is referred to as code 
 coupling and the Factory method pattern assists in decoupling the code.

The Factory Method design pattern is used by first defining a separate operation, a factory method, for creating an 
object, and then using this factory method by calling it to create the object. This enables writing of subclasses that 
decide how a parent object is created and what type of objects the parent contains.