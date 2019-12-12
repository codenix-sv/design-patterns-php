# Composite pattern in PHP

In software engineering, the composite pattern is a partitioning design pattern. The composite pattern describes a group
 of objects that are treated the same way as a single instance of the same type of object. The intent of a composite is 
 to "compose" objects into tree structures to represent part-whole hierarchies. Implementing the composite pattern lets 
 clients treat individual objects and compositions uniformly.

## What problems can the Composite design pattern solve?

- A part-whole hierarchy should be represented so that clients can treat part and whole objects uniformly.
- A part-whole hierarchy should be represented as tree structure.

When defining (1) Part objects and (2) Whole objects that act as containers for Part objects, clients must treat them separately, which complicates client code.

## What solution does the Composite design pattern describe?

- Define a unified Component interface for both part (Leaf) objects and whole (Composite) objects.
- Individual Leaf objects implement the Component interface directly, and Composite objects forward requests to their child components.

This enables clients to work through the Component interface to treat Leaf and Composite objects uniformly: Leaf objects
 perform a request directly, and Composite objects forward the request to their child components recursively downwards 
 the tree structure. This makes client classes easier to implement, change, test, and reuse.
