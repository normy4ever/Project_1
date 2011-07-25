<?php

$list = array(
            anchor('www.strandcarei.eu', 'Strandul din Carei', 'title="Strandul din Carei"'),
            anchor('ro.wikipedia.org/wiki/Carei', 'Pagina wiki al orasului Carei', 'title="Pagina wiki al orasului Carei"'),
            anchor('www.informatia-zilei.ro/sm/eveniment/castelul-karolyi-din-carei-este-un-adevarat-peles-al-ardealului/', 'Articol despre Castelul Careian', 'title="Articol despre Castelul Careian"'),
            anchor('www.turismland.ro/castelul-karolyi-din-carei-maramures/', 'Castelul din Carei', 'title="Articol despre Castelul Careian"')
            );

$attributes = array(
                    'class' => 'boldlist',
                    'id'    => 'link_list'
                    );

echo ul($list, $attributes);

?>