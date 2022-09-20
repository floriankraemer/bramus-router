# phauthentic/router

[![Build Status](https://github.com/phauthentic/router/workflows/CI/badge.svg)](https://github.com/bramus/router/actions) [![Source](http://img.shields.io/badge/source-bramus/router-blue.svg?style=flat-square)](https://github.com/bramus/router) [![Version](https://img.shields.io/packagist/v/bramus/router.svg?style=flat-square)](https://packagist.org/packages/bramus/router) [![Downloads](https://img.shields.io/packagist/dt/bramus/router.svg?style=flat-square)](https://packagist.org/packages/bramus/router/stats) [![License](https://img.shields.io/packagist/l/bramus/router.svg?style=flat-square)](https://github.com/bramus/router/blob/master/LICENSE)

A lightweight and simple object-oriented PHP Router.

Built by Bram(us) Van Damme _([https://www.bram.us](https://www.bram.us))_ and [Contributors](https://github.com/bramus/router/graphs/contributors)

## Features

- Supports `GET`, `POST`, `PUT`, `DELETE`, `OPTIONS`, `PATCH` and `HEAD` request methods
- [Routing shorthands such as `get()`, `post()`, `put()`, …](#routing-shorthands)
- [Static Route Patterns](#route-patterns)
- Dynamic Route Patterns: [Dynamic PCRE-based Route Patterns](#dynamic-pcre-based-route-patterns) or [Dynamic Placeholder-based Route Patterns](#dynamic-placeholder-based-route-patterns)
- [Optional Route Subpatterns](#optional-route-subpatterns)
- [Supports `X-HTTP-Method-Override` header](#overriding-the-request-method)
- [Subrouting / Mounting Routes](#subrouting--mounting-routes)
- [Allowance of `Class@Method` calls](#classmethod-calls)
- [Custom 404 handling](#custom-404)
- [Before Route Middlewares](#before-route-middlewares)
- [Before Router Middlewares / Before App Middlewares](#before-router-middlewares)
- [After Router Middleware / After App Middleware (Finish Callback)](#after-router-middleware--run-callback)
- [Works fine in subfolders](#subfolder-support)

## Prerequisites/Requirements

- PHP 8.0 or greater
- [URL Rewriting](https://gist.github.com/bramus/5332525)

## Installation

Installation is possible using Composer

```
composer require phauthentic/router ~1.6
```

## Acknowledgements

`bramus/router` is inspired upon [Klein](https://github.com/chriso/klein.php), [Ham](https://github.com/radiosilence/Ham), and [JREAM/route](https://bitbucket.org/JREAM/route) . Whilst Klein provides lots of features it is not object oriented. Whilst Ham is Object Oriented, it's bad at _separation of concerns_ as it also provides templating within the routing class. Whilst JREAM/route is a good starting point it is limited in what it does (only GET routes for example).

## License

`bramus/router` is released under the MIT public license. See the enclosed `LICENSE` for details.
