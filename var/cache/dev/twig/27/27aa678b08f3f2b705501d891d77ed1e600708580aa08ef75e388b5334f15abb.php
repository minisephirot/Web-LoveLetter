<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_85a527809159d9dce60e3a745b8ef0f7f511cf4b834fb89125345f9cb2a7f785 extends Twig_Template
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
        $__internal_44679c45e41b9ddbf279c6a3ae3735fa2bbd5a97a8527b16723815981282b734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44679c45e41b9ddbf279c6a3ae3735fa2bbd5a97a8527b16723815981282b734->enter($__internal_44679c45e41b9ddbf279c6a3ae3735fa2bbd5a97a8527b16723815981282b734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_54b4bcc297b2ec583a701b9a6a9d85430ff98e459daadba8c0a3f2206fcd5449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b4bcc297b2ec583a701b9a6a9d85430ff98e459daadba8c0a3f2206fcd5449->enter($__internal_54b4bcc297b2ec583a701b9a6a9d85430ff98e459daadba8c0a3f2206fcd5449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_44679c45e41b9ddbf279c6a3ae3735fa2bbd5a97a8527b16723815981282b734->leave($__internal_44679c45e41b9ddbf279c6a3ae3735fa2bbd5a97a8527b16723815981282b734_prof);

        
        $__internal_54b4bcc297b2ec583a701b9a6a9d85430ff98e459daadba8c0a3f2206fcd5449->leave($__internal_54b4bcc297b2ec583a701b9a6a9d85430ff98e459daadba8c0a3f2206fcd5449_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
