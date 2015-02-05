<?php

/* FoodPandaCountryBundle:Country:index.html.twig */
class __TwigTemplate_faf48e7a6eb0a774ae2f4201272ac2e6d31715291a1890515fbd3b2e1d29eaf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <h1>Please, choose your action</h1>
    <a class=\"btn btn-default\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("list_country");
        echo "\">Show Country List</a>
    <a  class=\"btn btn-default\"href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("csv_country");
        echo "\">Download CSV</a>
";
    }

    public function getTemplateName()
    {
        return "FoodPandaCountryBundle:Country:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
