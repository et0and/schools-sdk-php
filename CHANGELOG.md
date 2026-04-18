# Changelog

## 0.5.1 (2026-04-18)

Full Changelog: [v0.5.0...v0.5.1](https://github.com/et0and/schools-sdk-php/compare/v0.5.0...v0.5.1)

### Bug Fixes

* **client:** properly generate file params ([7d325ac](https://github.com/et0and/schools-sdk-php/commit/7d325ac6bd5fdd639a6d58877249ee4bd7d826f8))
* **client:** resolve serialization issue with unions and enums ([54b747b](https://github.com/et0and/schools-sdk-php/commit/54b747b8e2bda0dcdc4f6b1e5b4b01ac3628dda3))
* populate enum-typed properties with enum instances ([0afa596](https://github.com/et0and/schools-sdk-php/commit/0afa596d50db0a884f698d030163737618e0fe1a))


### Chores

* **internal:** codegen related update ([d51e0f9](https://github.com/et0and/schools-sdk-php/commit/d51e0f9799e82bc1ed06bc49b24e134324ff6ffc))
* **internal:** tweak CI branches ([41c1d61](https://github.com/et0and/schools-sdk-php/commit/41c1d61ba051bbe4b27a04b0bb99f5c8271adfce))

## 0.5.0 (2026-02-27)

Full Changelog: [v0.4.0...v0.5.0](https://github.com/et0and/schools-sdk-php/compare/v0.4.0...v0.5.0)

### ⚠ BREAKING CHANGES

* replace special flag type `omittable` with just `null`
* use aliases for phpstan types

### Features

* add idempotency header support ([6e6fe21](https://github.com/et0and/schools-sdk-php/commit/6e6fe21a7901504d207cde01dd11deef48b52284))
* improved phpstan type annotations ([79f311f](https://github.com/et0and/schools-sdk-php/commit/79f311f7849df26b62c01f320b72fb81e6a89432))
* replace special flag type `omittable` with just `null` ([7cd1715](https://github.com/et0and/schools-sdk-php/commit/7cd171536f9bf517436e269aab1fcc69d0183439))
* simplify and make the phpstan types more consistent ([7420051](https://github.com/et0and/schools-sdk-php/commit/7420051d3bd4675c45b6da79cf604a1d49676146))
* use `$_ENV` aware getenv helper ([347ead3](https://github.com/et0and/schools-sdk-php/commit/347ead39b2a2c9a840ed68f8c40d5289a3b9937b))
* use aliases for phpstan types ([b1a2fcf](https://github.com/et0and/schools-sdk-php/commit/b1a2fcf4dc2bd8736ab993d6e3bffbf48cb865e7))


### Bug Fixes

* support arrays in query param construction ([ecfbc27](https://github.com/et0and/schools-sdk-php/commit/ecfbc2701f5c03b570c8969a894a398ded439266))
* typos in README.md ([1193154](https://github.com/et0and/schools-sdk-php/commit/119315478a5825e826f93cda40e421dfe21fa4ef))
* used redirect count instead of retry count in base client ([8e556b8](https://github.com/et0and/schools-sdk-php/commit/8e556b8e5ea930f51ca6efe06737545f5e3eafe1))


### Chores

* add git attributes and composer lock file ([319fc1c](https://github.com/et0and/schools-sdk-php/commit/319fc1cddce38b79bb2021b81899978a8f979eb6))
* **internal:** add a basic client test ([6cab5bb](https://github.com/et0and/schools-sdk-php/commit/6cab5bbfd1a5e50a8dd3998d3e0878cda682d5c6))
* **internal:** codegen related update ([861a0d0](https://github.com/et0and/schools-sdk-php/commit/861a0d0aeba18bac381ad44428209686875bc53a))
* **internal:** codegen related update ([e168407](https://github.com/et0and/schools-sdk-php/commit/e1684071a46f307f35490af39ca3fbf113b9bf09))
* **internal:** codegen related update ([fbab668](https://github.com/et0and/schools-sdk-php/commit/fbab668c055abac94a1bc937455742e9060bcb86))
* **internal:** codegen related update ([2618aae](https://github.com/et0and/schools-sdk-php/commit/2618aae2d9d7a80931962ffab9502c3c8ab6bcd2))
* **internal:** codegen related update ([5edbfe5](https://github.com/et0and/schools-sdk-php/commit/5edbfe5c5ba753066b4b0632609cf9fcc3fb0c61))
* **internal:** codegen related update ([2f03e94](https://github.com/et0and/schools-sdk-php/commit/2f03e94660154d580fe4fd49236f1a440e046244))
* **internal:** codegen related update ([38c6aa6](https://github.com/et0and/schools-sdk-php/commit/38c6aa6f74280a15aa709cf0266d0afb51c1e30d))
* **internal:** codegen related update ([956ca38](https://github.com/et0and/schools-sdk-php/commit/956ca3894bb38d7acfe9a272a074b59ff370012a))
* **internal:** codegen related update ([c3b29d4](https://github.com/et0and/schools-sdk-php/commit/c3b29d431eda502ca8429cd9632e6621ce554c87))
* **internal:** codegen related update ([5a52c12](https://github.com/et0and/schools-sdk-php/commit/5a52c1274c0b05bdb770f31876d464b76ffdf2a4))
* **internal:** codegen related update ([40b1393](https://github.com/et0and/schools-sdk-php/commit/40b139362bf9eeb416c5c053a423e7bb4d5d4489))
* **internal:** ignore stainless-internal artifacts ([7462f8b](https://github.com/et0and/schools-sdk-php/commit/7462f8b650bf9269d8a947256ae668550e931775))
* **internal:** minor test script reformatting ([b913855](https://github.com/et0and/schools-sdk-php/commit/b9138556ee90c052096764b0d8d83c317658760e))
* **internal:** php cs fixer should not be memory limited ([d5fd361](https://github.com/et0and/schools-sdk-php/commit/d5fd361de94955e80b7631c21eb1fd614517deec))
* **internal:** refactor auth by moving concern from base client into client ([7c23328](https://github.com/et0and/schools-sdk-php/commit/7c23328a86c8aca4b0bfb898ea9261200238c2b3))
* **internal:** remove mock server code ([e055928](https://github.com/et0and/schools-sdk-php/commit/e0559284305011bd09073b9eb7c6cb93b1ee8b03))
* **internal:** update `actions/checkout` version ([d33fa4b](https://github.com/et0and/schools-sdk-php/commit/d33fa4bfd657ab03c92e2ae05a05dd46c6aa8778))
* **internal:** update phpstan comments ([38244ad](https://github.com/et0and/schools-sdk-php/commit/38244ad37716f92a3b9326da4898cbdacc0282b8))
* **internal:** upgrade phpunit ([671d957](https://github.com/et0and/schools-sdk-php/commit/671d9572ac3fb3310665d89c252884b83ddc8f53))
* **readme:** remove beta warning now that we're in ga ([8d619ba](https://github.com/et0and/schools-sdk-php/commit/8d619bad78a34478d9ec0a51bd5f549f0c3454cb))
* update mock server docs ([59d4722](https://github.com/et0and/schools-sdk-php/commit/59d47224647816beec72c93d449ca7471f66c009))

## 0.4.0 (2025-12-26)

Full Changelog: [v0.3.0...v0.4.0](https://github.com/et0and/schools-sdk-php/compare/v0.3.0...v0.4.0)

### Features

* support unwrapping envelopes ([31e5a44](https://github.com/et0and/schools-sdk-php/commit/31e5a44b5cdf871bcfcdb4817b8a00399b3d36e5))


### Bug Fixes

* a number of serialization errors ([8dbb258](https://github.com/et0and/schools-sdk-php/commit/8dbb25811b4b9d683fd07f7c6e00e01ae84acde6))
* correctly serialize dates ([4b4a306](https://github.com/et0and/schools-sdk-php/commit/4b4a30645910f28417394e316d22463fe19d61a4))

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
