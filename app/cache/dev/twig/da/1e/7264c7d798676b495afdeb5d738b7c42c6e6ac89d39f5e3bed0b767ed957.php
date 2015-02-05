<?php

/* FoodPandaCountryBundle:Default:show.html.twig */
class __TwigTemplate_da1e7264c7d798676b495afdeb5d738b7c42c6e6ac89d39f5e3bed0b767ed957 extends Twig_Template
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
        echo "<table>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["key"] => $context["cell"]) {
            // line 3
            echo "        <tr>
            <td>";
            // line 4
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td>
            <td>";
            // line 5
            echo twig_escape_filter($this->env, $context["cell"], "html", null, true);
            echo "</td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['cell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "FoodPandaCountryBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  33 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
