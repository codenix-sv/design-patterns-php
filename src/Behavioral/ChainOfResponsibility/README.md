# Chain-of-responsibility pattern in PHP

In object-oriented design, the chain-of-responsibility pattern is a design pattern consisting of a source of command 
objects and a series of processing objects. Each processing object contains logic that defines the types of command 
objects that it can handle; the rest are passed to the next processing object in the chain. A mechanism also exists 
for adding new processing objects to the end of this chain. Thus, the chain of responsibility is an object oriented 
version of the if ... else if ... else if ....... else ... endif idiom, with the benefit that the condition–action 
blocks can be dynamically rearranged and reconfigured at runtime.

In a variation of the standard chain-of-responsibility model, some handlers may act as dispatchers, capable of sending 
commands out in a variety of directions, forming a tree of responsibility. In some cases, this can occur recursively, 
with processing objects calling higher-up processing objects with commands that attempt to solve some smaller part of 
the problem; in this case recursion continues until the command is processed, or the entire tree has been explored. 
An XML interpreter might work in this manner.

This pattern promotes the idea of loose coupling.

The chain-of-responsibility pattern is structurally nearly identical to the decorator pattern, the difference being that
 for the decorator, all classes handle the request, while for the chain of responsibility, exactly one of the classes in
 the chain handles the request. This is a strict definition of the Responsibility concept in the GoF book. However, 
 many implementations (such as loggers below, or UI event handling, or servlet filters in Java, etc) allow several 
 elements in the chain to take responsibility.

## What problems can the Chain-of-responsibility pattern solve?
- Coupling the sender of a request to its receiver should be avoided.
- It should be possible that more than one receiver can handle a request.

Implementing a request directly within the class that sends the request is inflexible because it couples the class to 
a particular receiver and makes it impossible to support multiple receivers.

## What solution does the Chain-of-responsibility design pattern describe?
- Define a chain of receiver objects having the responsibility, depending on run-time conditions, to either handle a 
request or forward it to the next receiver on the chain (if any).

This enables to send a request to a chain of receivers without having to know which one handles the request. 
The request gets passed along the chain until a receiver handles the request. The sender of a request is no 
longer coupled to a particular receiver.