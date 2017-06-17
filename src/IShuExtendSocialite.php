<?php

namespace SocialiteProviders\IShu;

use SocialiteProviders\Manager\SocialiteWasCalled;

class IShuExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('ishu', __NAMESPACE__.'\Provider');
    }
}
