# html5-elements
HTML 5.2 elements in JSON format as cateogorized by the W3C Working Draft.\
The dataset can be used for serialization or validation purposes.

## Files
`html5-elements.php` - PHP file for generating the JSON data file.\
`html5-elements.json` - Formatted version of the JSON data file.\
`html5-elements.min.json` - Minified version of the JSON data file.

## Content

### DOM Content Models
- Metadata Content
- Flow Content
- Sectioning Content
- Heading Content
- Phrasing Content
- Embedded Content
- Interactive Content
- Palpable Content
- Script-Supporting Elements

### HTML Elements
- The HTML Element
- Document Metadata
- Sections
- Grouping Content
- Text-Level Semantics
- Edits
- Embedded Content
- Links
- Tabular Data
- Forms
- Interactive Elements
- Scripting
- Disabled Elements
- All Elements (Non-Standard)

`All Elements` is a non-standard collection of all HTML elements.

### HTML Syntax
- Void Elements
- Template Elements
- Raw Text Elements
- Escapable Raw Text Elements
- Foreign Elements

### Non-Conforming Features
- Obsolete Elements
- Draft Elements

## Other

The minified version of the data file is generated with the following command:\
`php html5-elements.php > html5-elements.min.json`

Note: Sufficient permissions are required to run the script.

The formatted version can be generated with the [JSON Formatter and Validator](https://jsonformatter.curiousconcept.com/) by Curious Concept.

The build-in `json_decode` function in PHP accepts a `JSON_PRETTY_PRINT` flag as the second parameter but it uses four spaces for indentation.
