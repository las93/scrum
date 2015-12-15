{include file='/src/Front/View/ProjectMenu.tpl'}
<div class="line_statut">
    <form name="f1" method="post">
        <table>
            <tr>
                <td>{gettext word='Name'}:</td>
                <td><input name="name" type="text" placeholder="{gettext word='EnterTheThemeName'}" required></td>
                <td></td>
            </tr>
            <tr>
                <td>{gettext word='Description'}:</td>
                <td><textarea name="description" placeholder="{gettext word='EnterTheThemeDescription'}"></textarea></td>
            </tr>
            <tr>
                <td>{gettext word='Color'}:</td>
                <td>
                    <select name='color'>
                        <option value='bg-red'>{gettext word='Red'}</option>
                        <option value='bg-yellow'>{gettext word='Yellow'}</option>
                        <option value='bg-aqua'>{gettext word='Aqua'}</option>
                        <option value='bg-blue'>{gettext word='Blue'}</option>
                        <option value='bg-light-blue'>{gettext word='LightBlue'}</option>
                        <option value='bg-green'>{gettext word='Green'}</option>
                        <option value='bg-navy'>{gettext word='Navy'}</option>
                        <option value='bg-teal'>{gettext word='Teal'}</option>
                        <option value='bg-olive'>{gettext word='Olive'}</option>
                        <option value='bg-lime'>{gettext word='Lime'}</option>
                        <option value='bg-orange'>{gettext word='Orange'}</option>
                        <option value='bg-fuchsia'>{gettext word='Fuchsia'}</option>
                        <option value='bg-purple'>{gettext word='Purple'}</option>
                        <option value='bg-maroon'>{gettext word='Maroon'}</option>
                        <option value='bg-black'>{gettext word='Black'}</option>
                    </select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>{gettext word='Icon'}:</td>
                <td>
                    <select name='icon' onChange="$('#little_icon').attr('class', 'ion '+this.value);">
                        <option value='ion-archive'>ion-archive</option>
                        <option value='ion-at'>ion-at</option>
                        <option value='ion-bag'>ion-bag</option>
                        <option value='ion-battery-charging'>ion-battery-charging</option>
                        <option value='ion-battery-empty'>ion-battery-empty</option>
                        <option value='ion-battery-full'>ion-battery-full</option>
                        <option value='ion-battery-half'>ion-battery-half</option>
                        <option value='ion-battery-low'>ion-battery-low</option>
                        <option value='ion-beaker'>ion-beaker</option>
                        <option value='ion-beer'>ion-beer</option>
                        <option value='ion-bluetooth'>ion-bluetooth</option>
                        <option value='ion-bookmark'>ion-bookmark</option>
                        <option value='ion-briefcase'>ion-briefcase</option>
                        <option value='ion-bug'>ion-bug</option>
                        <option value='ion-calculator'>ion-calculator</option>
                        <option value='ion-calendar'>ion-calendar</option>
                        <option value='ion-camera'>ion-camera</option>
                        <option value='ion-card'>ion-card</option>
                        <option value='ion-chatbox'>ion-chatbox</option>
                        <option value='ion-chatbox-working'>ion-chatbox-working</option>
                        <option value='ion-chatboxes'>ion-chatboxes</option>
                        <option value='ion-chatbubble'>ion-chatbubble</option>
                        <option value='ion-chatbubble-working'>ion-chatbubble-working</option>
                        <option value='ion-chatbubbles'>ion-chatbubbles</option>
                        <option value="ion-clipboard">ion-clipboard</option>
                        <option value="ion-clock">ion-clock</option>
                        <option value="ion-cloud">ion-cloud</option>
                        <option value="ion-code">ion-code</option>
                        <option value="ion-code-download">ion-code-download</option>
                        <option value="ion-code-working">ion-code-working</option>
                        <option value="ion-coffee">ion-coffee</option>
                        <option value="ion-compass">ion-compass</option>
                        <option value="ion-compose">ion-compose</option>
                        <option value="ion-connection-bars">ion-connection-bars</option>
                        <option value="ion-contrast">ion-contrast</option>
                        <option value="ion-disc">ion-disc</option>
                        <option value="ion-document">ion-document</option>
                        <option value="ion-document-text">ion-document-text</option>
                        <option value="ion-earth">ion-earth</option>
                        <option value="ion-edit">ion-edit</option>
                        <option value="ion-egg">ion-egg</option>
                        <option value="ion-eject">ion-eject</option>
                        <option value="ion-email">ion-email</option>
                        <option value="ion-eye">ion-eye</option>
                        <option value="ion-eye-disabled">ion-eye-disabled</option>
                        <option value="ion-female">ion-female</option>
                        <option value="ion-filing">ion-filing</option>
                        <option value="ion-film-marker">ion-film-marker</option>
                        <option value="ion-flag">ion-flag</option>
                        <option value="ion-flash">ion-flash</option>
                        <option value="ion-flash-off">ion-flash-off</option>
                        <option value="ion-flask">ion-flask</option>
                        <option value="ion-folder">ion-folder</option>
                        <option value="ion-fork">ion-fork</option>
                        <option value="ion-fork-repo">ion-fork-repo</option>
                        <option value="ion-forward">ion-forward</option>
                        <option value="ion-game-controller-a">ion-game-controller-a</option>
                        <option value="ion-game-controller-b">ion-game-controller-b</option>
                        <option value="ion-gear-a">ion-gear-a</option>
                        <option value="ion-gear-b">ion-gear-b</option>
                        <option value="ion-grid">ion-grid</option>
                        <option value="ion-hammer">ion-hammer</option>
                        <option value="ion-headphone">ion-headphone</option>
                        <option value="ion-heart">ion-heart</option>
                        <option value="ion-help">ion-help</option>
                        <option value="ion-help-buoy">ion-help-buoy</option>
                        <option value="ion-help-circled">ion-help-circled</option>
                        <option value="ion-home">ion-home</option>
                        <option value="ion-icecream">ion-icecream</option>
                        <option value="ion-icon-social-google-plus">ion-icon-social-google-plus</option>
                        <option value="ion-icon-social-google-plus-outline">ion-icon-social-google-plus-outline</option>
                        <option value="ion-image">ion-image</option>
                        <option value="ion-images">ion-images</option>
                        <option value="ion-information">ion-information</option>
                        <option value="ion-information-circled">ion-information-circled</option>
                        <option value="ion-ionic">ion-ionic</option>
                        <option value="ion-ipad">ion-ipad</option>
                        <option value="ion-iphone">ion-iphone</option>
                        <option value="ion-ipod">ion-ipod</option>
                        <option value="ion-jet">ion-jet</option>
                        <option value="ion-key">ion-key</option>
                        <option value="ion-knife">ion-knife</option>
                        <option value="ion-laptop">ion-laptop</option>
                        <option value="ion-leaf">ion-leaf</option>
                        <option value="ion-levels">ion-levels</option>
                        <option value="ion-lightbulb">ion-lightbulb</option>
                        <option value="ion-link">ion-link</option>
                        <option value="ion-load-a">ion-load-a</option>
                        <option value="ion-load-b">ion-load-b</option>
                        <option value="ion-load-c">ion-load-c</option>
                        <option value="ion-load-d">ion-load-d</option>
                        <option value="ion-location">ion-location</option>
                        <option value="ion-locked">ion-locked</option>
                        <option value="ion-log-in">ion-log-in</option>
                        <option value="ion-log-out">ion-log-out</option>
                        <option value="ion-loop">ion-loop</option>
                        <option value="ion-magnet">ion-magnet</option>
                        <option value="ion-male">ion-male</option>
                        <option value="ion-man">ion-man</option>
                        <option value="ion-map">ion-map</option>
                        <option value="ion-medkit">ion-medkit</option>
                        <option value="ion-mic-a">ion-mic-a</option>
                        <option value="ion-mic-b">ion-mic-b</option>
                        <option value="ion-mic-c">ion-mic-c</option>
                        <option value="ion-model-s">ion-model-s</option>
                        <option value="ion-monitor">ion-monitor</option>
                        <option value="ion-more">ion-more</option>
                        <option value="ion-music-note">ion-music-note</option>
                        <option value="ion-navigate">ion-navigate</option>
                        <option value="ion-no-smoking">ion-no-smoking</option>
                        <option value="ion-nuclear">ion-nuclear</option>
                        <option value="ion-paper-airplane">ion-paper-airplane</option>
                        <option value="ion-paperclip">ion-paperclip</option>
                        <option value="ion-pause">ion-pause</option>
                        <option value="ion-person">ion-person</option>
                        <option value="ion-person-add">ion-person-add</option>
                        <option value="ion-person-stalker">ion-person-stalker</option>
                        <option value="ion-pie-graph">ion-pie-graph</option>
                        <option value="ion-pin">ion-pin</option>
                        <option value="ion-pinpoint">ion-pinpoint</option>
                        <option value="ion-pizza">ion-pizza</option>
                        <option value="ion-plane">ion-plane</option>
                        <option value="ion-play">ion-play</option>
                        <option value="ion-playstation">ion-playstation</option>
                        <option value="ion-pound">ion-pound</option>
                        <option value="ion-power">ion-power</option>
                        <option value="ion-pricetag">ion-pricetag</option>
                        <option value="ion-pricetags">ion-pricetags</option>
                        <option value="ion-printer">ion-printer</option>
                        <option value="ion-radio-waves">ion-radio-waves</option>
                        <option value="ion-record">ion-record</option>
                        <option value="ion-refresh">ion-refresh</option>
                        <option value="ion-reply">ion-reply</option>
                        <option value="ion-reply-all">ion-reply-all</option>
                        <option value="ion-search">ion-search</option>
                        <option value="ion-settings">ion-settings</option>
                        <option value="ion-share">ion-share</option>
                        <option value="ion-shuffle">ion-shuffle</option>
                        <option value="ion-skip-backward">ion-skip-backward</option>
                        <option value="ion-skip-forward">ion-skip-forward</option>
                        <option value="ion-social-android">ion-social-android</option>
                        <option value="ion-social-apple">ion-social-apple</option>
                        <option value="ion-social-bitcoin">ion-social-bitcoin</option>
                        <option value="ion-social-buffer">ion-social-buffer</option>
                        <option value="ion-social-dribbble">ion-social-dribbble</option>
                        <option value="ion-social-dropbox">ion-social-dropbox</option>
                        <option value="ion-social-facebook">ion-social-facebook</option>
                        <option value="ion-social-freebsd-devil">ion-social-freebsd-devil</option>
                        <option value="ion-social-github">ion-social-github</option>
                        <option value="ion-social-googleplus">ion-social-googleplus</option>
                        <option value="ion-social-hackernews">ion-social-hackernews</option>
                        <option value="ion-social-linkedin">ion-social-linkedin</option>
                        <option value="ion-social-pinterest">ion-social-pinterest</option>
                        <option value="ion-social-reddit">ion-social-reddit</option>
                        <option value="ion-social-rss">ion-social-rss</option>
                        <option value="ion-social-skype">ion-social-skype</option>
                        <option value="ion-social-tumblr">ion-social-tumblr</option>
                        <option value="ion-social-tux">ion-social-tux</option>
                        <option value="ion-social-twitter">ion-social-twitter</option>
                        <option value="ion-social-vimeo">ion-social-vimeo</option>
                        <option value="ion-social-windows">ion-social-windows</option>
                        <option value="ion-social-wordpress">ion-social-wordpress</option>
                        <option value="ion-social-yahoo">ion-social-yahoo</option>
                        <option value="ion-social-youtube">ion-social-youtube</option>
                        <option value="ion-speakerphone">ion-speakerphone</option>
                        <option value="ion-speedometer">ion-speedometer</option>
                        <option value="ion-spoon">ion-spoon</option>
                        <option value="ion-star">ion-star</option>
                        <option value="ion-stats-bars">ion-stats-bars</option>
                        <option value="ion-steam">ion-steam</option>
                        <option value="ion-stop">ion-stop</option>
                        <option value="ion-thermometer">ion-thermometer</option>
                        <option value="ion-thumbsdown">ion-thumbsdown</option>
                        <option value="ion-thumbsup">ion-thumbsup</option>
                        <option value="ion-trash-a">ion-trash-a</option>
                        <option value="ion-trash-b">ion-trash-b</option>
                        <option value="ion-umbrella">ion-umbrella</option>
                        <option value="ion-unlocked">ion-unlocked</option>
                        <option value="ion-upload">ion-upload</option>
                        <option value="ion-usb">ion-usb</option>
                        <option value="ion-videocamera">ion-videocamera</option>
                        <option value="ion-volume-high">ion-volume-high</option>
                        <option value="ion-volume-low">ion-volume-low</option>
                        <option value="ion-volume-medium">ion-volume-medium</option>
                        <option value="ion-volume-mute">ion-volume-mute</option>
                        <option value="ion-waterdrop">ion-waterdrop</option>
                        <option value="ion-wifi">ion-wifi</option>
                        <option value="ion-wineglass">ion-wineglass</option>
                        <option value="ion-woman">ion-woman</option>
                        <option value="ion-wrench">ion-wrench</option>
                    </select>
                </td>
                <td rowspan="2" width="100">                 
                    <div class="icon">
                        <i class="ion ion-archive" style="font-size:23px;" id="little_icon"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" class="submit" value="{gettext word='Validate'}"></td>
            </tr>
        </table>
    </form>
</div>