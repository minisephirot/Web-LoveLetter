<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_29ea97043b3b5e4b6e1faac109c06b0c36984ad1be1c7cdf8fe7ab8d4337a5a5 extends Twig_Template
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
        $__internal_f30ee5d93f73ca88f7cf78ef1f6d96751f1c063ae627fea9d46a63c0a078f32f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f30ee5d93f73ca88f7cf78ef1f6d96751f1c063ae627fea9d46a63c0a078f32f->enter($__internal_f30ee5d93f73ca88f7cf78ef1f6d96751f1c063ae627fea9d46a63c0a078f32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3dda2740da67296016589dc69e9458c247ac06d8c0bd9eca1d9ef1eab4a68a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dda2740da67296016589dc69e9458c247ac06d8c0bd9eca1d9ef1eab4a68a92->enter($__internal_3dda2740da67296016589dc69e9458c247ac06d8c0bd9eca1d9ef1eab4a68a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f30ee5d93f73ca88f7cf78ef1f6d96751f1c063ae627fea9d46a63c0a078f32f->leave($__internal_f30ee5d93f73ca88f7cf78ef1f6d96751f1c063ae627fea9d46a63c0a078f32f_prof);

        
        $__internal_3dda2740da67296016589dc69e9458c247ac06d8c0bd9eca1d9ef1eab4a68a92->leave($__internal_3dda2740da67296016589dc69e9458c247ac06d8c0bd9eca1d9ef1eab4a68a92_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
