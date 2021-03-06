# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## UNRELEASED
### Added:
 - `Iq` stanza model
 - `Presence` stanza model
 - `Enum` helper
 
### BC breaks:
 - `XmlElement::get` now return `null` instead of `false` when nothing is found.

## [0.2.1] Milestone 2 fix 1 - 2016-10-04
### fixed

- Use in project fix for `fabiang/sasl` instead of fork

## [0.2.0] Milestone 2 - 2015-06-21
### Added
- `StreamDecorator` abstract class used to make pipeline of streams,
- `Connector` interface, used as abstraction for creating connection streams,
- Dumping utility, that can be accessed via `\Kadet\Xmpp\helper\dump` function,
- `XmppClient` class which acts like dependency injection container for modules,
- `Authenticator` module interface,
- `SaslAuthenticator` implementing interface mentioned above,
- `Stanza` model class for handling stanzas

### Changed
- `XmlFactory` now creates `XmlElement` instead of just returning class,
- Library is now using own class to handle XML element,
- Encryption is now handled by `TlsEnabler` module

### Removed
- `XmppStream` class was merged into `XmppClient`
