# Differences to the original Bramus implementation

This is a list of noteworthy changes and improvements to the original implementation.

* PHP 8.0 or greater is required. 
* The original Bramus implementations says object-oriented: This refactoring honors the SOLID principles and improves the flexibility and extendibility of the library.
* Dispatching the handler is not considered a responsibility of the router (SRP principle).
  * Use your own dispatcher, e.g implement a PSR7 middleware that wraps the router and dispatcher. 
* Handling a not found result and returning a 404 is not considered a responsibility of the route (SRP principle).
  * Use your 404 handler, e.g implement a PSR7 middleware that runs a 404 handler as last middleware in the stack.
* Routes are now described as objects and therefore much more easy to extend.
* `Router::dispatch()` returns a result object that contains the matched route.
* A library should be extendable, therefore all private methods were made protected.
* Several improvements in the internals of the router where made that were found by phpstorm.
