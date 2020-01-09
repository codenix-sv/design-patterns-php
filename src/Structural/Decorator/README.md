# Decorator pattern in PHP

In object-oriented programming, the decorator pattern is a design pattern that allows behavior to be added to an 
individual object, dynamically, without affecting the behavior of other objects from the same class. The decorator 
pattern is often useful for adhering to the Single Responsibility Principle, as it allows functionality to be divided 
between classes with unique areas of concern. The decorator pattern is structurally nearly identical to the chain of 
responsibility pattern, the difference being that in a chain of responsibility, exactly one of the classes handles the 
request, while for the decorator, all classes handle the request.

## What problems can it solve?
- Responsibilities should be added to (and removed from) an object dynamically at run-time.
- A flexible alternative to subclassing for extending functionality should be provided.

When using subclassing, different subclasses extend a class in different ways. But an extension is bound to the class at
 compile-time and can't be changed at run-time.

## What solution does it describe?

Define Decorator objects that
- implement the interface of the extended (decorated) object (Component) transparently by forwarding all requests to it
- perform additional functionality before/after forwarding a request.

This allows working with different Decorator objects to extend the functionality of an object dynamically at run-time. 