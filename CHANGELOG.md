# Changelog

## 0.3.0 (2025-12-10)

Full Changelog: [v0.2.1...v0.3.0](https://github.com/et0and/schools-sdk-php/compare/v0.2.1...v0.3.0)

### ⚠ BREAKING CHANGES

* use camel casing for all class properties

### Features

* add `BaseResponse` class for accessing raw responses ([c16a5b9](https://github.com/et0and/schools-sdk-php/commit/c16a5b98d80c15ab749ae6861051cc3387e3d0ea))
* allow both model class instances and arrays in setters ([32a816b](https://github.com/et0and/schools-sdk-php/commit/32a816b2dd505b6428aea1b212deb7a283f5962a))
* split out services into normal & raw types ([7cd0114](https://github.com/et0and/schools-sdk-php/commit/7cd0114485facc09398732f225c21456ec044b90))
* use camel casing for all class properties ([fec7285](https://github.com/et0and/schools-sdk-php/commit/fec728518618e88a610b558f22cf03ad307fb1d7))


### Chores

* switch from `#[Api(optional: true|false)]` to `#[Required]|#[Optional]` for annotations ([215a9ba](https://github.com/et0and/schools-sdk-php/commit/215a9ba7aef8a67b3fd2449c3494b3763e079da0))
* use `$self = clone $this;` instead of `$obj = clone $this;` ([1f0595b](https://github.com/et0and/schools-sdk-php/commit/1f0595b7de1993110eb234ac26026ed933a7bdfe))

## 0.2.1 (2025-12-04)

Full Changelog: [v0.2.0...v0.2.1](https://github.com/et0and/schools-sdk-php/compare/v0.2.0...v0.2.1)

### Chores

* be more targeted in suppressing superfluous linter warnings ([5144c0c](https://github.com/et0and/schools-sdk-php/commit/5144c0c5e3be8d982c7e96676c09361b5c8c663d))
* use non-trivial test assertions ([75c34af](https://github.com/et0and/schools-sdk-php/commit/75c34afaf5942fc5569aa18750c1430975bea03a))
* use single quote strings ([a4f0101](https://github.com/et0and/schools-sdk-php/commit/a4f0101e463f70805a80e84508f80255b48d30c1))

## 0.2.0 (2025-11-25)

Full Changelog: [v0.1.1...v0.2.0](https://github.com/et0and/schools-sdk-php/compare/v0.1.1...v0.2.0)

### ⚠ BREAKING CHANGES

* **client:** redesign methods

### Features

* **client:** redesign methods ([57f4263](https://github.com/et0and/schools-sdk-php/commit/57f42631744d055ad3d454c58575f1882c2da6f7))


### Bug Fixes

* phpStan linter errors ([e6c3e66](https://github.com/et0and/schools-sdk-php/commit/e6c3e664d079a25c27a989dfa257c658bc656ab9))
* rename invalid types ([52f448f](https://github.com/et0and/schools-sdk-php/commit/52f448ff32ef4a5b89ea01e815af323473a851be))


### Chores

* **client:** refactor error type constructors ([ef9eccb](https://github.com/et0and/schools-sdk-php/commit/ef9eccb854a628f02c9f51bc4fa9d5219cbc4cdd))
* **internal:** codegen related update ([dc4c9a7](https://github.com/et0and/schools-sdk-php/commit/dc4c9a7087b6ffa0690ac4eaa8b940ec2ab48ea5))

## 0.1.1 (2025-11-05)

Full Changelog: [v0.1.0...v0.1.1](https://github.com/et0and/schools-sdk-php/compare/v0.1.0...v0.1.1)

### Bug Fixes

* ensure auth methods return non-nullable arrays ([7dbb77f](https://github.com/et0and/schools-sdk-php/commit/7dbb77f3cedf499cf80191d1eaa81eb214599ecf))


### Chores

* **client:** send metadata headers ([885ed5a](https://github.com/et0and/schools-sdk-php/commit/885ed5a47563357a01530c2ca7f60b196942bd3b))

## 0.1.0 (2025-11-04)

Full Changelog: [v0.0.1...v0.1.0](https://github.com/et0and/schools-sdk-php/compare/v0.0.1...v0.1.0)

### ⚠ BREAKING CHANGES

* remove confusing `toArray()` alias to `__serialize()` in favour of `toProperties()`

### Features

* remove confusing `toArray()` alias to `__serialize()` in favour of `toProperties()` ([1d69e70](https://github.com/et0and/schools-sdk-php/commit/1d69e70e7673c9971f8ce113926a18ff29425684))


### Chores

* configure new SDK language ([17f4891](https://github.com/et0and/schools-sdk-php/commit/17f4891603f1907847af2ba9c54d7edf8f9d5f14))
* update SDK settings ([6467653](https://github.com/et0and/schools-sdk-php/commit/6467653aad8253a1c3b3f7b5c0f2744b7a45c559))
* use pascal case for phpstan typedefs ([1b4143e](https://github.com/et0and/schools-sdk-php/commit/1b4143e39ee494b93af989d41abf37005765ec09))
