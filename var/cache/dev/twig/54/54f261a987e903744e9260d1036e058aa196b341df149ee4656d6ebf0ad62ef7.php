<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_233978913b15cdfd90e08a693d21ef9796983d6930712e3e9897ca93978349dc extends Twig_Template
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
        $__internal_3971a04c261bfd9b6a6f70d9287c0ab07525fa57c839bee006b0fce0a8189dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3971a04c261bfd9b6a6f70d9287c0ab07525fa57c839bee006b0fce0a8189dbf->enter($__internal_3971a04c261bfd9b6a6f70d9287c0ab07525fa57c839bee006b0fce0a8189dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ab92994d813e1d783055fa9fa36610e2468c4a90b088fb4a6672183a27e4b22d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab92994d813e1d783055fa9fa36610e2468c4a90b088fb4a6672183a27e4b22d->enter($__internal_ab92994d813e1d783055fa9fa36610e2468c4a90b088fb4a6672183a27e4b22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3971a04c261bfd9b6a6f70d9287c0ab07525fa57c839bee006b0fce0a8189dbf->leave($__internal_3971a04c261bfd9b6a6f70d9287c0ab07525fa57c839bee006b0fce0a8189dbf_prof);

        
        $__internal_ab92994d813e1d783055fa9fa36610e2468c4a90b088fb4a6672183a27e4b22d->leave($__internal_ab92994d813e1d783055fa9fa36610e2468c4a90b088fb4a6672183a27e4b22d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
