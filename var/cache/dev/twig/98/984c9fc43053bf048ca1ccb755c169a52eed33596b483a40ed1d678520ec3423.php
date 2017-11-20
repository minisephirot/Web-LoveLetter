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
        $__internal_f818ae3a9d921db1c148db65c43d88139beb06ddff0704346a18d5b4df447eaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f818ae3a9d921db1c148db65c43d88139beb06ddff0704346a18d5b4df447eaa->enter($__internal_f818ae3a9d921db1c148db65c43d88139beb06ddff0704346a18d5b4df447eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_064cf8880c7bbec1f324fad2ad00c55609ee82212b5deb19464679febed62a9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064cf8880c7bbec1f324fad2ad00c55609ee82212b5deb19464679febed62a9f->enter($__internal_064cf8880c7bbec1f324fad2ad00c55609ee82212b5deb19464679febed62a9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f818ae3a9d921db1c148db65c43d88139beb06ddff0704346a18d5b4df447eaa->leave($__internal_f818ae3a9d921db1c148db65c43d88139beb06ddff0704346a18d5b4df447eaa_prof);

        
        $__internal_064cf8880c7bbec1f324fad2ad00c55609ee82212b5deb19464679febed62a9f->leave($__internal_064cf8880c7bbec1f324fad2ad00c55609ee82212b5deb19464679febed62a9f_prof);

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
