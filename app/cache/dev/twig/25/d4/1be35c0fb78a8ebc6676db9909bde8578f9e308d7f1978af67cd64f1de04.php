<?php

/* FoodPandaCountryBundle:Default:csv.html.twig */
class __TwigTemplate_25d41be35c0fb78a8ebc6676db9909bde8578f9e308d7f1978af67cd64f1de04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["key"] => $context["cell"]) {
            // line 2
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $context["cell"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FoodPandaCountryBundle:Default:csv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
