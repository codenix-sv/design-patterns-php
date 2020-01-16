# Design patterns in PHP

The patterns can be structured in different categories.

### [Creational](src/Creational)
In software engineering, creational design patterns are design patterns that
deal with object creation mechanisms, trying to create objects in a manner
suitable to the situation. The basic form of object creation could result in
design problems or added complexity to the design. Creational design patterns
solve this problem by somehow controlling this object creation.

* [AbstractFactory](src/Creational/AbstractFactory)
* [FactoryMethod](src/Creational/FactoryMethod)
* [Builder](src/Creational/Builder)
* [Singleton](src/Creational/Singleton)

### [Structural](src/Structural)
Structural Design Patterns are Design Patterns that ease the 
design by identifying a simple way to realize relationships between entities.

* [Adapter](src/Structural/Adapter)
* [Bridge](src/Structural/Bridge)
* [Composite](src/Structural/Composite)
* [Decorator](src/Structural/Decorator)
* [Facade](src/Structural/Facade)
* [Proxy](src/Structural/Proxy)

### [Behavioral](src/Behavioral)
Behavioral design patterns are design patterns that identify common communication patterns
 between objects and realize these patterns. By doing so, these patterns increase flexibility in carrying out this 
 communication.

* [ChainOfResponsibility](src/Behavioral/ChainOfResponsibility)
* [Command](src/Behavioral/Command)
* [Iterator](src/Behavioral/Iterator)