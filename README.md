# Query Object

Twig extension for converting the query string to an object with key/value pairs for use in templates.

## Installation

* Place the **queryobject** folder inside your **craft/plugins/** folder.
* Go to **settings/plugins** and install queryobject

## Usage

The plugin adds the Twig `queryobject` filter.

    {% set templateData = craft.request.queryStringWithoutPath|queryobject %}
    {% include 'news/entry' with templateData %}
