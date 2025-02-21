# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).


## [Unreleased] - 2018

### Added

### Changed

### Deprecated

### Removed

### Fixed

### Security

## [1.5.1] - 2018-11-28

### Changed

- Application credentials for parcel management

### Fixed

- Credential usage
- Make cache key dependent on endpoint
- Avoid infinite loop when calculating start date
- Translation configuration


## [1.5.0] - 2018-09-05

### Added

- Connection to Parcel Management API for retrieving available services 
- Tracking Pixel to success checkout working once every 30 days and configuration option for en- or disable 
- Configuration options of handling fee & text for combined Preferred Day and Time
- Configuration option for excluded drop-off days
- 'none' option to checkout services
- Blacklist validation for Preferred Location and Neighbour
- Display included service fees in delivery costs in checkout sidebar

### Changed

- Configuration scopes
- Preferred Neighbour and Preferred Location are now exclusive
- Display DHL Service box only for shipping inside Germany
- No provision of Preferred Day for orders containing backordered items


## [1.4.0] - 2018-07-12

### Added

- Allow using placeholders in bank reference fields for Cash On Delivery
- Added configuration option to transmit the customer's phone number to DHL
- Added compatibility to the module *Amazon Pay for Europe*

### Changed

- Limit max number of shipments to 50 per request to prevent invalid XML error

### Deprecated

### Removed

### Fixed

### Security

### Known issues

- If more than one shipment method exists, the DHL services are not displayed immediately.
  They become visible when clicking *Edit address* or when the page is reloaded. This will
  be fixed in future versions.


## [1.3.1] - 2018-04-25

### Added

- Information about Shipment Overview feature added to documentation
- Various documentation improvements and clarifications
- Expanded help texts on shipping method configuration page

### Changed

- The maximum length of Street numbers is now 7 characters instead of 5

### Fixed

- Insurance and CoD amounts of over 1000 units are now possible
- DHL status icons in order grid are now properly updated by Autocreate
- Checkout now does not show a DHL section if no services are available.
- Order emails sent from Autocreate now include the shipment ID
- Magento will no longer crash when changing the display currency in checkout
- Added some missing german translation strings

## [1.3.0] - 2018-01-19

### Added

- Display shipping label status in orders grid

### Fixed

- Code style improvements for Magento Marketplace

## [1.2.0] - 2017-12-15

### Added

- Create shipping labels via order grid mass action
- Encrypt API password in database
- Send shipment confirmation email during cron autocreate

### Fixed

- Remove receiver email address from request if parcel announcement service is disabled
- Fall back to order email address if it is not available at shipping address
- Improve address split for Austrian street numbers
- Re-calculate service fee on shipping method or service selection changes in checkout
- Consider Sundays in preferred day service options calculation
- Log webservice errors during cron autocreate

## [1.1.1] - 2017-09-27

### Fixed

- Improve autoloading of namespaced classes
- No longer terminate cron on shipment validation errors, continue processing
- Apply correct unit of measure for item weight in export declarations
- Display service validation errors in checkout that remained hidden under certain circumstances

## [1.1.0] - 2017-05-10

### Added

- Demand fees for Preferred Day / Preferred Time checkout services

### Fixed

- Missing array key for preferred day
- Fix authentication errors not being shown
- Fix label creation for partial shipments
- Make participation number required
- DB prefix will now be recognized

## 1.0.0 - 2016-10-17

- Initial release

[Unreleased]: https://git.netresearch.de/dhl/versenden-m1/compare/1.5.1...develop
[1.5.1]: https://git.netresearch.de/dhl/versenden-m1/compare/1.5.0...1.5.1
[1.5.0]: https://git.netresearch.de/dhl/versenden-m1/compare/1.4.0...1.5.0
[1.4.0]: https://git.netresearch.de/dhl/versenden-m1/compare/1.3.1...1.4.0
[1.3.1]: https://git.netresearch.de/dhl/versenden-m1/compare/1.3.0...1.3.1
[1.3.0]: https://git.netresearch.de/dhl/versenden-m1/compare/1.2.0...1.3.0
[1.2.0]: https://git.netresearch.de/dhl/versenden-m1/compare/1.1.1...1.2.0
[1.1.1]: https://git.netresearch.de/dhl/versenden-m1/compare/1.1.0...1.1.1
[1.1.0]: https://git.netresearch.de/dhl/versenden-m1/compare/1.0.0...1.1.0
