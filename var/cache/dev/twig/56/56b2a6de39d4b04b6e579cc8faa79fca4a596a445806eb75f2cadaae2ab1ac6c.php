<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_efa8fe722d237c6981e1c0477dcef812008c63abe60f0b39ba370e8842ff41e1 extends Twig_Template
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
        $__internal_d125ea5ae6ba4e41575111c7d559ddc99b32ad07aed0fcfc78ded454083a110d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d125ea5ae6ba4e41575111c7d559ddc99b32ad07aed0fcfc78ded454083a110d->enter($__internal_d125ea5ae6ba4e41575111c7d559ddc99b32ad07aed0fcfc78ded454083a110d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_10b04bfa283c54afc452345c83bce637dd1ac40e083c6a0713d5f216f3b3cfc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b04bfa283c54afc452345c83bce637dd1ac40e083c6a0713d5f216f3b3cfc4->enter($__internal_10b04bfa283c54afc452345c83bce637dd1ac40e083c6a0713d5f216f3b3cfc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d125ea5ae6ba4e41575111c7d559ddc99b32ad07aed0fcfc78ded454083a110d->leave($__internal_d125ea5ae6ba4e41575111c7d559ddc99b32ad07aed0fcfc78ded454083a110d_prof);

        
        $__internal_10b04bfa283c54afc452345c83bce637dd1ac40e083c6a0713d5f216f3b3cfc4->leave($__internal_10b04bfa283c54afc452345c83bce637dd1ac40e083c6a0713d5f216f3b3cfc4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
