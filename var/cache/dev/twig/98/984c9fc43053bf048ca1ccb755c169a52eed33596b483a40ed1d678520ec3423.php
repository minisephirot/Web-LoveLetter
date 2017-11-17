<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_bf67e48e3ab610965e018081e238ecefc00cad9a8e31ad1ce7d5d0f1e4ceceae extends Twig_Template
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
        $__internal_b3ce638746848cdacd59d93d230d93897e4a37e3655bea107bf95f94c24fefcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ce638746848cdacd59d93d230d93897e4a37e3655bea107bf95f94c24fefcf->enter($__internal_b3ce638746848cdacd59d93d230d93897e4a37e3655bea107bf95f94c24fefcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_3dda451d65780df496aab5e32315ec6deb1517e0ce6d4ba0eeb68236fb76edf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dda451d65780df496aab5e32315ec6deb1517e0ce6d4ba0eeb68236fb76edf2->enter($__internal_3dda451d65780df496aab5e32315ec6deb1517e0ce6d4ba0eeb68236fb76edf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b3ce638746848cdacd59d93d230d93897e4a37e3655bea107bf95f94c24fefcf->leave($__internal_b3ce638746848cdacd59d93d230d93897e4a37e3655bea107bf95f94c24fefcf_prof);

        
        $__internal_3dda451d65780df496aab5e32315ec6deb1517e0ce6d4ba0eeb68236fb76edf2->leave($__internal_3dda451d65780df496aab5e32315ec6deb1517e0ce6d4ba0eeb68236fb76edf2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
