# Team for October

Add a list of team members to your website, including custom avatars.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-team.git plugins/travis/team
```

## Usage

Build a partial for use in your pages:

```
==
<?php
use Travis\Team\Models\Member;

function onStart()
{
    $this['members'] = Member::orderBy('role', 'asc')->get();
}
?>
==
<div id="members">
    {% for member in members %}
        <div class="member">
            <div class="photo"><img src="{{ member.avatar.path }}" alt="" /></div>
            <h1>{{ member.first }} {{ member.last }}</h1>
            <h2>{{ member.role }}</h2>
            <div class="clear"></div>
            <p>{{ member.bio }}</p>
            <small>
                {% if member.phone_office %}
                    {{ member.phone_office }} Office<br/>
                {% endif %}
                {% if member.phone_mobile %}
                    {{ member.phone_mobile }} Mobile
                {% endif %}
            </small>
        </div>
    {% endfor %}
</div>
```

The advantage to building your own partials, instead of using a pre-made component, is that you can fully customize your use of the data.