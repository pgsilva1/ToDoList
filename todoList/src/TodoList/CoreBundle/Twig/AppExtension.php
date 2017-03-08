<?php

namespace TodoList\CoreBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('situacao_show', array($this, 'situacaoFilter')),
        );
    }

    public function situacaoFilter($situacao)
    {
        $situacao_number = number_format($situacao);
        if($situacao_number == 0){
          return "Pendente";
        }else if($situacao_number == 1){
          return "Concluída";
        }else{
          return "Erro";
        };
    }

    public function getName()
    {
        return 'app_extension';
    }
}
