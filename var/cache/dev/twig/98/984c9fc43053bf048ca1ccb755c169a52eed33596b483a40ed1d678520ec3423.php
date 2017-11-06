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
        $__internal_c183c67c8a95b48a0e6c6620c75c8175d70fe1237bfd523a1436d9705a5717cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c183c67c8a95b48a0e6c6620c75c8175d70fe1237bfd523a1436d9705a5717cd->enter($__internal_c183c67c8a95b48a0e6c6620c75c8175d70fe1237bfd523a1436d9705a5717cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_77bd78e5fe24921b7fa1c95e5c4baf97e1c81b365bdfed96f734c5a152c9606b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77bd78e5fe24921b7fa1c95e5c4baf97e1c81b365bdfed96f734c5a152c9606b->enter($__internal_77bd78e5fe24921b7fa1c95e5c4baf97e1c81b365bdfed96f734c5a152c9606b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c183c67c8a95b48a0e6c6620c75c8175d70fe1237bfd523a1436d9705a5717cd->leave($__internal_c183c67c8a95b48a0e6c6620c75c8175d70fe1237bfd523a1436d9705a5717cd_prof);

        
        $__internal_77bd78e5fe24921b7fa1c95e5c4baf97e1c81b365bdfed96f734c5a152c9606b->leave($__internal_77bd78e5fe24921b7fa1c95e5c4baf97e1c81b365bdfed96f734c5a152c9606b_prof);

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
