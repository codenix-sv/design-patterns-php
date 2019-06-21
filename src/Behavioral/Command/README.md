# Command pattern in PHP
In object-oriented programming, the command pattern is a behavioral design pattern in which an object is used to 
encapsulate all information needed to perform an action or trigger an event at a later time. This information includes 
the method name, the object that owns the method and values for the method parameters.

Four terms always associated with the command pattern are command, receiver, invoker and client. A command object knows
 about receiver and invokes a method of the receiver. Values for parameters of the receiver method are stored in the
 command. The receiver object to execute these methods is also stored in the command object by aggregation. 
The receiver then does the work when the execute() method in command is called. An invoker object knows how to execute 
a command, and optionally does bookkeeping about the command execution. The invoker does not know anything about a 
concrete command, it knows only about the command interface. Invoker object(s), command objects and receiver objects are
 held by a client object, the client decides which receiver objects it assigns to the command objects, and which 
 commands it assigns to the invoker. The client decides which commands to execute at which points. To execute a command,
 it passes the command object to the invoker object.

Using command objects makes it easier to construct general components that need to delegate, sequence or execute method
 calls at a time of their choosing without the need to know the class of the method or the method parameters. Using an 
 invoker object allows bookkeeping about command executions to be conveniently performed, as well as implementing 
 different modes for commands, which are managed by the invoker object, without the need for the client to be aware of 
 the existence of bookkeeping or modes.

## What problems can the Command pattern solve?
- Coupling the invoker of a request to a particular request should be avoided. That is, hard-wired requests should be avoided.
- It should be possible to configure an object (that invokes a request) with a request.

Implementing (hard-wiring) a request directly into a class is inflexible because it couples the class to a particular 
request at compile-time, which makes it impossible to specify a request at run-time.

## What solution does the Command design pattern describe?
- Define separate (command) objects that encapsulate a request.
- A class delegates a request to a command object instead of implementing a particular request directly.

This enables one to configure a class with a command object that is used to perform a request. The class is no longer 
coupled to a particular request and has no knowledge (is independent) of how the request is carried out.