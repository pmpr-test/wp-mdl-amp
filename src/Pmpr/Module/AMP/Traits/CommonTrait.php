<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             675fab8d3a2b3             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AMP\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AMP\Setting; trait CommonTrait { public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; if ($gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post)) { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sciomagaqmgggsiu = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post), $sciomagaqmgggsiu, true)) { $yemgmmgogcwccuky = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::egaaowwogygqqyia, []); if (is_array($yemgmmgogcwccuky) && in_array($gcqseksiskwueksc, $yemgmmgogcwccuky)) { $iwwqyiewcwimqcga = false; } } else { $iwwqyiewcwimqcga = false; } } return $this->ocksiywmkyaqseou("\160\x61\x67\x65\137\x68\141\163\x5f\141\155\x70", $iwwqyiewcwimqcga); } public function eywqecukyieuoaom() : ?string { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if (!$iwywmkygwewiamwm) { $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); } $aweokccqeyqmaygy = explode("\57", $iwywmkygwewiamwm); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) === $this->eywqecukyieuoaom() && is_string($iwywmkygwewiamwm) && strrev($iwywmkygwewiamwm)[0] === "\x2f"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if ($wp_rewrite) { if ($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\57{$wp_rewrite->pagination_base}\57")) { $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); } } return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->ewswusimyeosaogm(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (empty($jkmcwmwkaqwqegqq)) { $migiiksoiymissge = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, $seumokooiykcomco->ycqquoiyyuesegsy($post)); } elseif ($migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post)) { $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); } return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if ($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy)) { $agoaugssmsiumiym = $this->caokeucsksukesyo()->gyecsegqciqykomu()->iyooiokaaaqgesue($eeamcawaiqocomwy); $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()) . $agoaugssmsiumiym; } return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if (!$migiiksoiymissge) { $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(); } if ($migiiksoiymissge) { $migiiksoiymissge = explode("\x2f", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\x2f", $migiiksoiymissge); } return trailingslashit($migiiksoiymissge); } }
