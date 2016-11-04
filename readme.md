# Team for October

Add a list of team members to your website.

## Install

Add as a submodule to your project:

```bash
$ git submodule add git@github.com:swt83/php-october-team.git plugs/travis/team
```

## Usage

Build a partial for use on a page:

```
use Travis\Team\Models\Member;

function onStart()
{
  $this['members'] = Member::orderBy('role', 'asc')->get();
}
==
<aside id="members">
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
</aside>
```