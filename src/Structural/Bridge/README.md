# Bridge pattern in PHP

The bridge pattern is a design pattern used in software engineering that is meant to "decouple an abstraction from its 
implementation so that the two can vary independently", introduced by the Gang of Four. The bridge uses encapsulation, 
aggregation, and can use inheritance to separate responsibilities into different classes.

When a class varies often, the features of object-oriented programming become very useful because changes to a program's
 code can be made easily with minimal prior knowledge about the program. The bridge pattern is useful when both the 
 class and what it does vary often. The class itself can be thought of as the abstraction and what the class can do as 
 the implementation. The bridge pattern can also be thought of as two layers of abstraction.

The bridge pattern is often confused with the adapter pattern, and is often implemented using the object adapter pattern.

## What problems can the Bridge design pattern solve?

- An abstraction and its implementation should be defined and extended independently from each other.
- A compile-time binding between an abstraction and its implementation should be avoided so that an implementation can 
be selected at run-time.

When using subclassing, different subclasses implement an abstract class in different ways. But an implementation is 
bound to the abstraction at compile-time and can't be changed at run-time.

## What solution does the Bridge design pattern describe?

- Separate an abstraction (Abstraction) from its implementation (Implementor) by putting them in separate class hierarchies.
- Implement the Abstraction in terms of (by delegating to) an Implementor object.

This enables to configure an Abstraction with an Implementor object at run-time. 