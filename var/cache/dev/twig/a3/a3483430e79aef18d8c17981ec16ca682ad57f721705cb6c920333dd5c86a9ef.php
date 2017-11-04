<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_23b26384ccfbdfc3ac637202e8fd19023c137c038b34d43c28c1336569ae6970 extends Twig_Template
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
        $__internal_2a77c9d6b08a556656ae69db5dd4dcd87e19fb2bedb1b394c5072b845e1dc1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a77c9d6b08a556656ae69db5dd4dcd87e19fb2bedb1b394c5072b845e1dc1ec->enter($__internal_2a77c9d6b08a556656ae69db5dd4dcd87e19fb2bedb1b394c5072b845e1dc1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2aefe018299628bdcb6712792a0db5e0f94eb9030a5a2cd5ba644344fc2b6d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aefe018299628bdcb6712792a0db5e0f94eb9030a5a2cd5ba644344fc2b6d46->enter($__internal_2aefe018299628bdcb6712792a0db5e0f94eb9030a5a2cd5ba644344fc2b6d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2a77c9d6b08a556656ae69db5dd4dcd87e19fb2bedb1b394c5072b845e1dc1ec->leave($__internal_2a77c9d6b08a556656ae69db5dd4dcd87e19fb2bedb1b394c5072b845e1dc1ec_prof);

        
        $__internal_2aefe018299628bdcb6712792a0db5e0f94eb9030a5a2cd5ba644344fc2b6d46->leave($__internal_2aefe018299628bdcb6712792a0db5e0f94eb9030a5a2cd5ba644344fc2b6d46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
