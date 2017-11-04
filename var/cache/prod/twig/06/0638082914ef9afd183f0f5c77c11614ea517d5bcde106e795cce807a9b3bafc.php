<?php

/* ProjetWebTestBundle:Default:index.html.twig */
class __TwigTemplate_136e1efc6d2cceb844e83e3c24e887c236f9d52c06cbd8a18a094e0c86c1e888 extends Twig_Template
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
        // line 2
        echo "
<html>
    <body>
        Hello World!
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "ProjetWebTestBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "ProjetWebTestBundle:Default:index.html.twig", "C:\\wamp64\\www\\WebLoveLetter\\src\\ProjetWeb\\TestBundle/Resources/views/Default/index.html.twig");
    }
}
