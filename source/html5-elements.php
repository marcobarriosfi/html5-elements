<?php
header('content-type: application/json');

/* HTML 5.2 Elements */
/* Copyright © 2018-2021 Marco Barrios. All rights reserved. */
/* Description: HTML 5.2 elements in JSON format as categorized by the W3C Working Draft */
/* Last updated: 2021-10-15 */

/* Specification: HTML 5.2 W3C Recommendation */
/* Source: https://www.w3.org/TR/html52/ */

/* HTML 5.2 elements as cateogorized and ordered by the W3C Working Draft as of January 31, 2017  */
/* Source: https://www.w3.org/TR/html52/semantics.html */

namespace marcobarriosfi;

/** HTML */

$html = new \stdClass;

/** DOM Content Models */

$html->contentModels = new \stdClass;

/* 3.2.4.2.1 Metadata Content (8 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#metadata-content */
$html->contentModels->metadataContent = array("base", "link", "meta", "noscript", "script", "style", "template", "title");

/* 3.2.4.2.2 Flow Content (83 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#flow-content */
$html->contentModels->flowContent = array("a", "abbr", "address", "area", "article", "aside", "audio", "b", "bdi", "bdo", "blockquote", "br", "button", "canvas", "cite", "code", "data", "datalist", "del", "details", "dfn", "dialog", "div", "dl", "em", "embed", "fieldset", "figure", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "header", "hr", "i", "iframe", "img", "input", "ins", "kbd", "label", "link", "main", "map", "mark", "math", "meter", "nav", "noscript", "object", "ol", "output", "p", "picture", "pre", "progress", "q", "ruby", "s", "samp", "script", "section", "select", "small", "span", "strong", "sub", "sup", "svg", "table", "template", "textarea", "time", "u", "ul", "var", "video", "wbr", "#text");

/* 3.2.4.2.3 Sectioning Content (4 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#sectioning-content */
$html->contentModels->sectioningContent = array("article", "aside", "nav", "section");

/* 3.2.4.2.4 Heading Content (6 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#heading-content */
$html->contentModels->headingContent = array("h1", "h2", "h3", "h4", "h5", "h6");

/* 3.2.4.2.5 Phrasing Content (54 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#phrasing-content */
/* Note: a, area, del, ins, link and map elements are considered phrasing elements only when certain conditions are met */
$html->contentModels->phrasingContent = array("a", "abbr", "area", "audio", "b", "bdi", "bdo", "br", "button", "canvas", "cite", "code", "datalist", "del", "dfn", "em", "embed", "i", "iframe", "img", "input", "ins", "kbd", "label", "link", "map", "mark", "math", "meter", "noscript", "object", "output", "picture", "progress", "q", "ruby", "s", "samp", "script", "select", "small", "span", "strong", "sub", "sup", "svg", "template", "textarea", "time", "u", "var", "video", "wbr", "#text");

/* 3.2.4.2.6 Embedded Content (10 elements) */
/* Source: https://www.w3.org/TR/html52/semantics-embedded-content.html */
$html->contentModels->embeddedContent = array("audio", "canvas", "embed", "iframe", "img", "math", "object", "picture", "svg", "video");

/* 3.2.4.2.7 Interactive Content (12 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#interactive-content */
/* Note: a, audio, img, input and video elements are considered interactive elements only when certain conditions are met */
$html->contentModels->interactiveContent = array("a", "audio", "button", "details", "embed", "iframe", "img", "input", "label", "select", "textarea", "video");

/* 3.2.4.2.8 Palpable Content (70 elements) */
/* Source: https://www.w3.org/TR/html52/dom.html#palpable-content */
/* Note: audio, dl, input, ol and ul elements are considered palable elements only when certain conditions are met */
$html->contentModels->palpableContent = array("a", "abbr", "address", "article", "aside", "audio", "b", "bdi", "bdo", "blockquote", "button", "canvas", "cite", "code", "data", "details", "dfn", "div", "dl", "em", "embed", "fieldset", "figure", "footer", "form", "h1", "h2", "h3", "h4", "h5", "h6", "header", "i", "iframe", "img", "input", "ins", "kbd", "label", "main", "mark", "math", "meter", "nav", "object", "ol", "output", "p", "pre", "progress", "q", "ruby", "s", "samp", "section", "select", "small", "span", "strong", "sub", "sup", "svg", "table", "textarea", "time", "u", "ul", "var", "video", "#text");

/* 3.2.4.2.9 Script-Supporting Elements (2 elements) */
/* https://www.w3.org/TR/html52/dom.html#script-supporting-elements */
$html->contentModels->scriptSupportingElements = array("script", "template");

/** HTML Elements */

$html->elements = new \stdClass;

/* 4.1.1 The HTML Element (1 element) */
/* Source: https://www.w3.org/TR/html52/semantics.html#the-html-element */
$html->elements->htmlElement = array("html");

/* 4.2 Document Metadata (6 elements) */
/* https://www.w3.org/TR/html52/document-metadata.html */
$html->elements->documentMetadata = array("head", "title", "base", "link", "meta", "style");

/* 4.3 Sections (13 elements) */
/* Source: https://www.w3.org/TR/html52/sections.html */
$html->elements->sections = array("body", "article", "section", "nav", "aside", "h1", "h2", "h3", "h4", "h5", "h6", "header", "footer");

/* 4.4 Grouping Content (14 elements) */
/* Source: https://www.w3.org/TR/html52/grouping-content.html */
$html->elements->groupingContent = array("p", "address", "hr", "pre", "blockquote", "ol", "ul", "li", "dl", "dt", "dd", "figure", "figcaption", "main", "div");

/* 4.5 Text-Level Semantics (31 elements) */
/* Source: https://www.w3.org/TR/html52/textlevel-semantics.html */
$html->elements->textLevelSemantics = array("a", "em", "strong", "small", "s", "cite", "q", "dfn", "abbr", "ruby", "rb", "rt", "rtc", "rp", "data", "time", "code", "var", "samp", "kbd", "sub", "sup", "i", "b", "u", "mark", "bdi", "bdo", "span", "br", "wbr");

/* 4.6 Edits (2 elements) */
/* Source: https://www.w3.org/TR/html52/edits.html */
$html->elements->edits = array("ins", "del");

/* 4.7 Embedded Content (14 elements) */
/* Source: https://www.w3.org/TR/html52/semantics-embedded-content.html */
$html->elements->embeddedContent = array( "picture", "source", "img", "iframe", "embed", "object", "param", "video", "audio", "track", "map", "area", "math", "svg");

/* 4.8 Links (1 element) */
/* Source: https://www.w3.org/TR/html52/links.html */
$html->elements->links = array("a");

/* 4.9 Tabular Data (10 elements) */
/* Source: https://www.w3.org/TR/html52/tabular-data.html */
$html->elements->tabularData = array("table", "caption", "colgroup", "col", "tbody", "thead", "tfoot", "tr", "td", "th");

/* 4.10 Forms (14 elements) */
/* Source: https://www.w3.org/TR/html52/sec-forms.html */
$html->elements->forms = array( "form", "label", "input", "button", "select", "datalist", "optgroup", "option", "textarea", "output", "progress", "meter", "fieldset", "legend");

/* 4.11 Interactive Elements (3 elements) */
/* Source: https://www.w3.org/TR/html52/interactive-elements.html */
$html->elements->interactiveElements = array("details", "summary", "dialog");

/* 4.12 Scripting (4 elements) */
/* Source: https://www.w3.org/TR/html52/semantics-scripting.html */
$html->elements->scripting = array("script", "noscript", "template", "canvas");

/* 4.15 Disabled Elements (7 elements) */
/* Source: https://www.w3.org/TR/html52/disabled-elements.html */
$html->elements->disabledElements = array("button", "input", "select", "textarea", "optgroup", "option", "fieldset");

/* Non-standard Collection of All HTML Elements in Alphabetical Order */
$html->elements->allElements = array_merge(
  $html->elements->htmlElement, 
  $html->elements->documentMetadata, 
  $html->elements->sections,
  $html->elements->groupingContent,
  $html->elements->textLevelSemantics,
  $html->elements->edits,
  $html->elements->embeddedContent,
  $html->elements->links,
  $html->elements->tabularData,
  $html->elements->forms,
  $html->elements->interactiveElements,
  $html->elements->scripting
);

sort($html->elements->allElements);

/** HTML Syntax */

$html->syntax = new \stdClass;

/* 8.1.2 Void Elements (14 elements) */
/* Source: https://www.w3.org/TR/html5/syntax.html#void-elements */
$html->syntax->voidElements = array("area", "base", "br", "col", "embed", "hr", "img", "input", "link", "meta", "param", "source", "track", "wbr");

/* 8.1.2 Template Elements (1 element) */
/* Source: https://www.w3.org/TR/html5/syntax.html#the-template-elements */
$html->syntax->templateElements = array("template");

/* 8.1.2 Raw Text Elements (2 elements) */
/* Source: https://www.w3.org/TR/html5/syntax.html#raw-text */
$html->syntax->rawTextElements = array("script", "style");

/* 8.1.2 Escapable Raw Text Elements (2 elements) */
/* Source: https://www.w3.org/TR/html5/syntax.html#escapable-raw-text */
$html->syntax->escapableRawTextElements = array("textarea", "title");

/* 8.1.2 Foreign Elements (2 elements) */
/* Source: https://www.w3.org/TR/html5/syntax.html#foreign-elements */
$html->syntax->foreignElements = array("math", "svg");

/** Non-Conforming Features */

$html->nonConformingFeatures = new \stdClass;

/* 11.2 Non-Conforming Features (26 elements) */
/* Source: https://www.w3.org/TR/html52/obsolete.html */

/* Obsolete Elements (26 elements) */
/* "Note: commmand and keygen elements were part of the working draft but were removed from the recommendation */
$html->nonConformingFeatures->obsoleteElements = array("acronym", "applet", "basefont", "bgsound", "big", "blink", "center", "dir", "font", "frame", "frameset", "isindex", "listing", "marquee", "menu", "menuitem", "multicol", "nextid",  "nobr", "noembed", "noframes", "plaintext", "spacer", "strike", "tt", "xmp");

/* Draft Elements (2 elements) */
/* "Note: commmand and keygen elements were part of the working draft but were removed from the recommendation */
$html->nonConformingFeatures->draftElements = array("command", "keygen");

echo json_encode($html);

?>