<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7a65e2a9bbf4ce00847a826ee8c05a21954b62b953fcab9da798367070afea48 extends Twig_Template
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
        $__internal_27beea59f508f4c1f781e3b0969cfda28bee67447d23ce56dfddcfc3df4696e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27beea59f508f4c1f781e3b0969cfda28bee67447d23ce56dfddcfc3df4696e3->enter($__internal_27beea59f508f4c1f781e3b0969cfda28bee67447d23ce56dfddcfc3df4696e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_bf7e2b68395e41abd4f5258422bd1b8f09300dbe94b702fcee4fd7017dc9359f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7e2b68395e41abd4f5258422bd1b8f09300dbe94b702fcee4fd7017dc9359f->enter($__internal_bf7e2b68395e41abd4f5258422bd1b8f09300dbe94b702fcee4fd7017dc9359f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_27beea59f508f4c1f781e3b0969cfda28bee67447d23ce56dfddcfc3df4696e3->leave($__internal_27beea59f508f4c1f781e3b0969cfda28bee67447d23ce56dfddcfc3df4696e3_prof);

        
        $__internal_bf7e2b68395e41abd4f5258422bd1b8f09300dbe94b702fcee4fd7017dc9359f->leave($__internal_bf7e2b68395e41abd4f5258422bd1b8f09300dbe94b702fcee4fd7017dc9359f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
