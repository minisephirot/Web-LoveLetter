<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1f2832e6c8748e6a985b4ff35d952d8f3054518b38c88a3b7efa9ca8915d2cff extends Twig_Template
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
        $__internal_db5e12b09b7ae0af1f8dbe29db8bba17255d7acb3ad07067ee05c150c3d95c26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5e12b09b7ae0af1f8dbe29db8bba17255d7acb3ad07067ee05c150c3d95c26->enter($__internal_db5e12b09b7ae0af1f8dbe29db8bba17255d7acb3ad07067ee05c150c3d95c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_be86d9ab3ec71c3b3739e810a3b3bf4612be69de62c14d84d84e7c09254abff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be86d9ab3ec71c3b3739e810a3b3bf4612be69de62c14d84d84e7c09254abff6->enter($__internal_be86d9ab3ec71c3b3739e810a3b3bf4612be69de62c14d84d84e7c09254abff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_db5e12b09b7ae0af1f8dbe29db8bba17255d7acb3ad07067ee05c150c3d95c26->leave($__internal_db5e12b09b7ae0af1f8dbe29db8bba17255d7acb3ad07067ee05c150c3d95c26_prof);

        
        $__internal_be86d9ab3ec71c3b3739e810a3b3bf4612be69de62c14d84d84e7c09254abff6->leave($__internal_be86d9ab3ec71c3b3739e810a3b3bf4612be69de62c14d84d84e7c09254abff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
