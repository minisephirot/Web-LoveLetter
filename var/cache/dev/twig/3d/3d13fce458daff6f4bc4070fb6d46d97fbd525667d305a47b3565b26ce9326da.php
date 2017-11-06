<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_f3961c6eb6196b0dee28e4a821f72bdf01b0b01163e4d1779896a2825d37418b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3961c6eb6196b0dee28e4a821f72bdf01b0b01163e4d1779896a2825d37418b->enter($__internal_f3961c6eb6196b0dee28e4a821f72bdf01b0b01163e4d1779896a2825d37418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_eeaa3ebc2df58bae0de2aaa26a47fe55fbc251bddc9cafa4d9ce0084a0d30829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeaa3ebc2df58bae0de2aaa26a47fe55fbc251bddc9cafa4d9ce0084a0d30829->enter($__internal_eeaa3ebc2df58bae0de2aaa26a47fe55fbc251bddc9cafa4d9ce0084a0d30829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f3961c6eb6196b0dee28e4a821f72bdf01b0b01163e4d1779896a2825d37418b->leave($__internal_f3961c6eb6196b0dee28e4a821f72bdf01b0b01163e4d1779896a2825d37418b_prof);

        
        $__internal_eeaa3ebc2df58bae0de2aaa26a47fe55fbc251bddc9cafa4d9ce0084a0d30829->leave($__internal_eeaa3ebc2df58bae0de2aaa26a47fe55fbc251bddc9cafa4d9ce0084a0d30829_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
