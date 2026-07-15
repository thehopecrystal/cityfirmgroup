{{-- Add your livechat, telegram code here  --}}

{{--Start whatsapp code --}}

@if($settings->whatsapp)
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{$settings->whatsapp}}", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
            pre_filled_message: "Hello I am", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
@endif

{{-- End whatsap code  --}}


{{-- Paste Your  Live chart code  From Down Here --}}


<script>
  (function(d,t) {
    var BASE_URL="https://app.chatwoot.com";
    var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=BASE_URL+"/packs/js/sdk.js";
    g.async = true;
    s.parentNode.insertBefore(g,s);
    g.onload=function(){
      window.chatwootSDK.run({
        websiteToken: 'DL9VvbTYhRFfV6se1P7v3sgB',
        baseUrl: BASE_URL
      })
    }
  })(document,"script");
</script>











{{-- End livechat code  --}}




