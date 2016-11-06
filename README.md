# Rolodex for October

Add a list of contacts to your website, including custom avatars.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-rolodex.git plugins/travis/rolodex
```

## Usage

Build a partial for use in your pages:

```
==
<?php
use Travis\Rolodex\Models\Contact;

function onStart()
{
    // cache forever
    $this['contacts'] = Cache::rememberForever('contacts', function()
    {
        // load
        $records = Contact::orderBy('sort_order', 'asc')->get();

        // init
        $clean = [];

        // foreach record...
        foreach ($records as $record)
        {
            // convert to array
            $array = $record->toArray();

            // capture avatar path
            $array['avatar'] = is_object($record->avatar) ? $record->avatar->path : null;

            // save
            $clean[] = $array;
        }

        // return
        return $clean;
    });
}
?>
==
<div id="contacts">
    {% for contact in contacts %}
        <div class="contact">
            <div class="photo"><img src="{{ contact.avatar.path }}" alt="" /></div>
            <h1>{{ contact.first }} {{ contact.last }}</h1>
            <h2>{{ contact.role }}</h2>
            <div class="clear"></div>
            <p>{{ contact.bio }}</p>
            <small>
                {% if contact.phone_office %}
                    {{ contact.phone_office }} Office<br/>
                {% endif %}
                {% if contact.phone_mobile %}
                    {{ contact.phone_mobile }} Mobile
                {% endif %}
            </small>
        </div>
    {% endfor %}
</div>
```